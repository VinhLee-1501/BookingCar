<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheRides extends Model
{
    use HasFactory;
    Protected $fillable =[
        'name',
        'time_to_go',
        'estimated_arrival_time',
        'estimated_departure_time',
        'price',
        'carriage_way_id',
        'car_id',
    ];
}
