<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TheRides;


class HomeController extends Controller
{
    public function index(Request $request)
    {


        $name1 = 'Hồ Chí Minh';
        $name2 = 'Vĩnh Long';
        $name3 = 'Cà Mau';

        $tiketHCMData = TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as st1', 'st1.id', '=', 'carriage_ways.car_station_to')
            ->join('stations as st2', 'st2.id', '=', 'carriage_ways.car_station_from')
            ->select(
                'the_rides.time_to_go as timeStart',
                'the_rides.estimated_arrival_time as timeEnd',
                'the_rides.id as id',
                'the_rides.price as price',
                'the_rides.name as name',
                'carriage_ways.distance as distance',
                'carriage_ways.average_travel_time as time',
                'st1.name as goto',
                'st2.name  as gofrom'
            )
            ->where('the_rides.name', 'LIKE', '%' . $name1 . '%')
            ->get();



        $tiketVLData = TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as st1', 'st1.id', '=', 'carriage_ways.car_station_to')
            ->join('stations as st2', 'st2.id', '=', 'carriage_ways.car_station_from')
            ->select(
                'the_rides.time_to_go as timeStart',
                'the_rides.estimated_arrival_time as timeEnd',
                'the_rides.id as id',
                'the_rides.price as price',
                'the_rides.name as name',
                'carriage_ways.distance as distance',
                'carriage_ways.average_travel_time as time',
                'st1.name as goto',
                'st2.name  as gofrom'
            )
            ->where('the_rides.name', 'LIKE', '%' . $name2 . '%')
            ->get();

        $tiketCMData = TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as st1', 'st1.id', '=', 'carriage_ways.car_station_to')
            ->join('stations as st2', 'st2.id', '=', 'carriage_ways.car_station_from')
            ->select(
                'the_rides.time_to_go as timeStart',
                'the_rides.estimated_arrival_time as timeEnd',
                'the_rides.id as id',
                'the_rides.price as price',
                'the_rides.name as name',
                'carriage_ways.distance as distance',
                'carriage_ways.average_travel_time as time',
                'st1.name as goto',
                'st2.name  as gofrom'
            )
            ->where('the_rides.name', 'LIKE', '%' . $name3 . '%')
            ->get();


        $Data = [
            'tiketHCMData' => $tiketHCMData,
            'tiketVLData' => $tiketVLData,
            'tiketCMData' => $tiketCMData,
        ];

        // dd($tiketHCMData);
        return view('client.index', compact('Data'));
    }
}