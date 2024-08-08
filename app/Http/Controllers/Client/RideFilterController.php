<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\TheRides;


class RideFilterController extends Controller
{
    public function filterByScheduleId($id)
    {

        //     dd($id);

        $ridefilterData = TheRides::where('carriage_way_id', '=', $id)
            ->join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as st1', 'st1.id', '=', 'carriage_ways.car_station_to')
            ->join('stations as st2', 'st2.id', '=', 'carriage_ways.car_station_from')
            ->select('the_rides.time_to_go as timeStart',
                'the_rides.estimated_arrival_time as timeEnd',
                'the_rides.id as id',
                'the_rides.price as price',
                'the_rides.name as name',
                'carriage_ways.average_travel_time as time',
                'st1.name as goto',
                'st2.name  as gofrom',

            )
// dd($ridefilterData);
            ->get();
        return view('client.rideFilter', compact('ridefilterData'));
    }
}