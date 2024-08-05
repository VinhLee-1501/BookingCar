<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarriageWay extends Model
{
    use HasFactory;

    public function stationsTo()
    {
        return $this->belongsTo(Station::class, 'car_station_to');
    }

    public function stationsFrom()
    {
        return $this->belongsTo(Station::class, 'car_station_from');
    }


}
