<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSeatCar extends Model
{
    use HasFactory;

    public function ticket_id()
    {
        return $this->belongsTo(TicketCar::class, 'ticket_id');
    }

    public function seat_id()
    {
        return $this->hasMany(SeatPosition::class, 'seat_id');
    }
}
