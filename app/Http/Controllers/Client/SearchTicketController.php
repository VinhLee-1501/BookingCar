<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TicketCar;
use Illuminate\Http\Request;

class SearchTicketController extends Controller
{

    public function searchTicket(Request $request)
    {
        $phone = $request->input('phone');
        $name = $request->input('name');

        if ($name && $phone) {
            $tickets = TicketCar::join('ticket_booking_cars', 'ticket_booking_cars.id', '=', 'ticket_cars.ticket_booking_id')
                ->join('users', 'users.id', '=', 'ticket_booking_cars.user_id')
                ->join('the_rides', 'ticket_cars.the_ride_id', '=', 'the_rides.id')
                ->join('cars', 'cars.id', '=', 'the_rides.car_id')
                ->join('ticket_seat_cars', 'ticket_cars.id', '=', 'ticket_seat_cars.ticket_id')
                ->join('seat_positions AS seats', 'ticket_seat_cars.seat_id', '=', 'seats.id')
                ->where('ticket_cars.name', 'like', '%' . $name . '%')
                ->where('users.phone', $phone)
                ->select('ticket_cars.name as name', 'users.name as user_name',
                    'users.phone as phone', 'users.gender as gender',
                    'users.address as address', 'seats.name as seat_name',
                    'the_rides.name as ride_name', 'cars.license_plates as license_plates',
                    'the_rides.time_to_go as time_to_go', 'ticket_booking_cars.prepayment as pre_payment'
                )
                ->get();

//            dd($ticket->name);
            if ($tickets->isEmpty()) {
                session()->flash('error', 'Không tìm thấy vé nào.');
            }
        } else {
            session()->flash('error', 'Vui lòng nhập tên để tìm kiếm.');
            return redirect()->back();
        }
        return $this->showInfoTicket($tickets);

    }


    public function showInfoTicket($tickets)
    {
        return view('client.show-ticket', ['tickets' => $tickets]);
    }

}
