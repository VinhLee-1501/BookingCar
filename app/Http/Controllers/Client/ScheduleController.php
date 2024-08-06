<?php

namespace App\Http\Controllers\Client;

use App\Models\TheRides;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function select(Request $request)
    {
        $scheduleData = TheRides::join('carriage_ways', 'the_rides.carriage_way_id', '=', 'carriage_ways.id')
            ->join('cars', 'cars.id', '=', 'the_rides.car_id')
            ->join('categories', 'categories.id', '=', 'cars.category_id')
            ->select('carriage_ways.distance', 'carriage_ways.id as id', 'carriage_ways.average_travel_time',
                'carriage_ways.name', 'the_rides.price', 'categories.name as category_name')
            ->get();

        // dd($scheduleData);
        return view('client.schedule', compact('scheduleData'));

    }


}