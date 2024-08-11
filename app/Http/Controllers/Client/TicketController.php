<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketCar;
use App\Models\TicketBookingCar;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function show()
    {
        $userId = Auth::id();

        if ($userId) {
            // Tìm đơn hàng gần đây nhất của người dùng
            $latestBooking = TicketBookingCar::where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$latestBooking) {
                return redirect()->back()->with('error', 'Không tìm thấy đơn hàng nào.');
            }

            $tickets = TicketCar::join('the_rides', 'the_rides.id', '=', 'ticket_cars.the_ride_id')
            ->join('ticket_booking_cars', 'ticket_booking_cars.id', '=', 'ticket_cars.ticket_booking_id')
            ->join('users', 'users.id', '=', 'ticket_booking_cars.user_id')
            ->join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as start', 'carriage_ways.car_station_to', '=', 'start.id')
            ->join('stations as end', 'carriage_ways.car_station_from', '=', 'end.id')
            ->join('cars', 'cars.id', '=', 'the_rides.car_id')
            ->join('categories', 'categories.id', '=', 'cars.category_id')
            ->join('seat_positions', 'seat_positions.cars_id', '=', 'cars.id')
            ->select(
                'ticket_cars.id as ticket_id',
                'ticket_cars.name as ticket_name',
                'the_rides.id as ride_id',
                'the_rides.name as ride_name',
                'the_rides.time_to_go as time_to_go',
                'the_rides.estimated_arrival_time as timefrom',
                'ticket_booking_cars.id as booking_id',
                'users.name as user_name',
                'carriage_ways.name as carriage_way_name',
                'start.name as start_station_name',
                'end.name as end_station_name',
                'cars.license_plates as license_plates',
                'categories.name as category_name',
                'seat_positions.name as seat_name',
                'users.name as user_name',
                'users.phone as user_phone',
                'users.email as user_email',
                'ticket_booking_cars.prepayment as prepayment',

            )
            ->where('ticket_cars.ticket_booking_id', $latestBooking->id)
            ->groupBy(
                'ticket_cars.id',
                'the_rides.id',
                'the_rides.time_to_go',
                'the_rides.estimated_arrival_time',
                'ticket_booking_cars.id',
                'users.name',
                'carriage_ways.name',
                'start.name',
                'end.name',
                'cars.name',
                'categories.name',
                'seat_positions.name',


            )
            ->get();

            // dd($tickets);
            return view('client.ticket', compact('tickets'));
        } else {
            // Nếu người dùng chưa đăng nhập, điều hướng đến trang đăng nhập hoặc trang thông tin
            return redirect()->route('user.signin')->with('info', 'Bạn cần đăng nhập để xem danh sách vé.');
        }
    }
}