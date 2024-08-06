<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarriageWay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'day_of_week',
        'trip_of_day',
        'average_travel_time',
        'distance',
        'car_station_to',
        'car_station_from'
    ];


    public function stationsTo()
    {
        return $this->belongsTo(Station::class, 'car_station_to');
    }

    public function stationsFrom()
    {
        return $this->belongsTo(Station::class, 'car_station_from');
    }


}
