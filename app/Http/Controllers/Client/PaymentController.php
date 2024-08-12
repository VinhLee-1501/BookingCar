<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\SeatPosition;
use App\Models\TheRides;
use App\Models\TicketBookingCar;
use App\Models\TicketCar;
use App\Models\TicketSeatCar;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class PaymentController extends Controller
{
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function showPaymentPage(Request $request)
    {
        $data = $request->all();
        $selectedSeats = [];
        if (empty($data['selectedSeats'])) {
            return redirect()->back()->with('error', 'Vui lòng chọn chỗ ngồi trước khi thanh toán!');
        }
        try {
            $selectedSeats = json_decode($data['selectedSeats'], true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log('Error decoding selected seats: ' . json_last_error_msg());
            }
        } catch (Exception $e) {
            // Handle potential decoding errors gracefully
            return redirect()->back()->with('error', 'Có lỗi khi xử lý chỗ ngồi đã chọn!');
        }


        $infoUser = User::where('email', $data['email'])->first();
        // dd($infoUser);
        $theRide = TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as start_station', 'carriage_ways.car_station_to', '=', 'start_station.id')
            ->join('stations as end_station', 'carriage_ways.car_station_from', '=', 'end_station.id')
            ->join('cars', 'the_rides.car_id', '=', 'cars.id')
            ->join('categories', 'cars.category_id', '=', 'categories.id')
            ->join('seat_positions', 'seat_positions.cars_id', '=', 'cars.id')
            ->select('the_rides.*', 'start_station.name')
            ->groupBy('the_rides.id')
            ->find($data['the_ride_id']);

        return view('client.pay', compact('data', 'theRide', 'selectedSeats', 'infoUser'));
    }

    public function momo_payment(Request $request)
    {
        $data = $request->all();
        $totalSeats = json_encode($data['seat_id']);
//        dd($totalSeats);
        $infoUser = User::where('email', $data['email'])->first();
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $data['totalPrice'] * 1000;
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/user/ticket";
        $ipnUrl = "http://127.0.0.1:8000/user/pay";
        $extraData = $request->input('the_ride_id');
        $requestId = time() . "";
        $requestType = "payWithATM";
        $the_ride_id = $request->input('the_ride_id');
//        dd($the_ride_id);
//            $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey .
            "&amount=" . $amount .
            "&extraData=" . $extraData .
            "&ipnUrl=" . $ipnUrl .
            "&orderId=" . $orderId .
            "&orderInfo=" . $orderInfo .
            "&partnerCode=" . $partnerCode .
            "&redirectUrl=" . $redirectUrl .
            "&requestId=" . $requestId .
            "&requestType=" . $requestType;

        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'the_ride_id' => $the_ride_id
        );
//        dd($data->$extraData);
        $result = $this->execPostRequest($endpoint, json_encode($data));
//        dd($result);
        $jsonResult = json_decode($result, true);  // decode json
//        dd($jsonResult);
        //Just a example, please check more in there
//        dd($data);
        if ($jsonResult['resultCode'] == 0) {
            // Thanh toán thành công
            $ticketBooking = new TicketBookingCar;
            $ticketBooking->user_id = $infoUser->id;
            $ticketBooking->day_founded = now();
            $ticketBooking->prepayment = $data['amount'];
            $ticketBooking->status = 0;
            $ticketBooking->save();

            $ticketBookingId = $ticketBooking->id;
            $ticket = new TicketCar;
            $ticket->name = $this->generateTicketCode();
            $ticket->ticket_booking_id = $ticketBookingId;
            $ticket->the_ride_id = $the_ride_id;
            $ticket->save();
            $decodedData = json_decode($totalSeats, true);
            $seatIds = [];
            foreach ($decodedData as $seatName) {
                $seat = SeatPosition::where('name', $seatName)->first();
                if ($seat) {
                    $ticketSeat = new TicketSeatCar;
                    $ticketSeat->ticket_id = $ticket->id;
                    $ticketSeat->seat_id = $seat->id;
                    $ticketSeat->save();

                    // Cập nhật trạng thái của ghế nếu cần
                    $seat->status = 0;
                    $seat->save();
                }
            }

            return redirect()->to($jsonResult['payUrl']);
//            return redirect()->route('payment.success', ['ticketBookingId' => $ticketBookingId]);
        } else {
            // Xử lý trường hợp thanh toán thất bại
        }

//        header('Location: ' . $jsonResult['payUrl']);

    }

    public function vnpay_payment(Request $request)
    {
        $data = $request->all();

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/user/pay";
        $vnp_TmnCode = "S779PPRZ";
        $vnp_HashSecret = "ELZFALRP1RCQR1Y69MQJHKZ0O82Z1RI0"; //Chuỗi bí mật

        $vnp_TxnRef = "01";

        $vnp_OrderInfo = "Thanh toán";
        $vnp_OrderType = "BeeCar";
        $vnp_Amount = $data['totalPrice'] * 1000;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array("vnp_Version" => "2.1.0", "vnp_TmnCode" => $vnp_TmnCode, "vnp_Amount" => $vnp_Amount, "vnp_Command" => "pay", "vnp_CreateDate" => date('d/m/Y H:i:s'), "vnp_CurrCode" => "VND", "vnp_IpAddr" => $vnp_IpAddr, "vnp_Locale" => $vnp_Locale, "vnp_OrderInfo" => $vnp_OrderInfo, "vnp_OrderType" => $vnp_OrderType, "vnp_ReturnUrl" => $vnp_Returnurl, "vnp_TxnRef" => $vnp_TxnRef);

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00', 'message' => 'success', 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    function generateTicketCode()
    {
        $randomNum = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
        return $randomNum;
    }

}
