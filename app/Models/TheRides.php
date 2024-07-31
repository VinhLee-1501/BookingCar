<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheRides extends Model
{
    use HasFactory;

    public function carriageWay()
    {
        return $this->belongsTo(CarriageWay::class, 'carriage_way_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

}
