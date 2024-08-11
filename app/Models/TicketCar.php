<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ticket_booking_id',
        'the_ride_id',
        'seat_ld'
    ];

    public function theRide()
    {
        return $this->belongsTo(TheRides::class, 'the_ride_id');
    }

    public function ticketBookingCar()
    {
        return $this->belongsTo(TicketBookingCar::class, 'ticket_booking_id');
    }
    public function seatPosition()
    {
        return $this->belongsTo(SeatPosition::class, 'seat_ld');
    }
}