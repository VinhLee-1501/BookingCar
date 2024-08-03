<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'status',
        'cars_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

}
