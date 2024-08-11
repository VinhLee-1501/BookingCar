<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketCar;
use App\Models\TicketBookingCar;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function show($inFoUser)
    {
        // Lấy thông tin người dùng từ $inFoUser
        $userId = $inFoUser;

        // Nếu không có thông tin người dùng từ $inFoUser, lấy từ session
        if (!$userId) {
            $userId = session('user_id');
        }

        // Kiểm tra xem người dùng có tồn tại không
        if (!$userId) {
            return redirect()->back()->with('error', 'Thông tin người dùng không hợp lệ.');
        }

        // Tìm đơn hàng gần đây nhất của người dùng
        $latestBooking = TicketBookingCar::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$latestBooking) {
            return redirect()->back()->with('error', 'Không tìm thấy đơn hàng nào.');
        }

        // Lấy danh sách vé của đơn hàng gần đây nhất
        $tickets = TicketCar::where('ticket_booking_car_id', $latestBooking->id)->get();

        // Truyền dữ liệu vé đến view
        return view('client.ticket', compact('tickets'));
    }
}