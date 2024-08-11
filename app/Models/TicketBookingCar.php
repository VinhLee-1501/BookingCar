<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketBookingCar extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function ticketCars()
    {
        return $this->hasMany(TicketCar::class, 'ticket_booking_id');
    }
}
