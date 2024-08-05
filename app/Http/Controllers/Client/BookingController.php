<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\SeatPosition;
use App\Models\TicketBookingCar;
use App\Models\TicketCar;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        $selectedSeats = $request->input('selectedSeats'); // Array of seat IDs
        $totalPrice = $request->input('totalPrice');

        $ticketBooking = TicketBookingCar::create([
            'user_id' => $user->id,
            'prepayment' => $totalPrice,
        ]);

        foreach ($selectedSeats as $seatId) {
            $seat = SeatPosition::find($seatId);
            TicketCar::create([
                'name' => 'V0' . $seat->id,
                'ticket_booking_car_id' => $ticketBooking->id,
                'the_ride_id' => $request->the_ride_id,
                'seat_id' => $seat->id,
            ]);
            $seat->update(['status' => 0]);
        }

        return view('client.pay');
    }
}
