<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function rides()
    {
        return $this->hasMany(TheRides::class, 'car_id');
    }

}
