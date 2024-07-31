<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TicketCar;
use Illuminate\Http\Request;

class SearchTicketController extends Controller
{

    public function searchTicket(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $phone = $request->input('phone');

        if ($ticketId && $phone) {
            $ticket = TicketCar::join('ticket_booking_cars', 'ticket_booking_cars.id', '=', 'ticket_cars.ticket_booking_id')
                ->join('users', 'users.id', '=', 'ticket_booking_cars.user_id')
                ->where('ticket_cars.id', $ticketId)
                ->where('users.phone', $phone)
                ->select('ticket_cars.*', 'users.phone')
                ->first();
        }

        return $this->showInfoTicket($ticket);
    }

    public function showInfoTicket($ticket)
    {
        return view('client.show-ticket', ['ticket' => $ticket]);
    }

}
