<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\SeatPosition;
use App\Models\TheRides;

class SeatPositionController extends Controller
{
    public function getRideData($id)
    {
        return TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as start_station', 'carriage_ways.car_station_to', '=', 'start_station.id')
            ->join('stations as end_station', 'carriage_ways.car_station_from', '=', 'end_station.id')
            ->join('cities as cityTo', 'start_station.city_id', '=', 'cityTo.id')
            ->join('cities as cityFrom', 'end_station.city_id', '=', 'cityFrom.id')
            ->join('districts as districtTo', 'districtTo.city_id', '=', 'cityTo.id')
            ->join('districts as districtFrom', 'districtFrom.city_id', '=', 'cityFrom.id')
            ->join('cars', 'the_rides.car_id', '=', 'cars.id')
            ->join('categories', 'cars.category_id', '=', 'categories.id')
            ->join('seat_positions', 'seat_positions.cars_id', '=', 'cars.id')
            ->select('the_rides.*', 'start_station.name')
            ->groupBy('the_rides.id')
            ->find($id);
    }

    public function getSeatPositions($id)
    {
        $seatPositionsA = SeatPosition::where('name', 'like', 'A%')->distinct()->get();
        $seatPositionsB = SeatPosition::where('name', 'like', 'B%')->distinct()->get();

        $theRide = $this->getRideData($id);
//        dd($theRide->carriageWay->name);
        return view('client.seatPosition', [
            'seatPositionsA' => $seatPositionsA,
            'seatPositionsB' => $seatPositionsB,
            'theRide' => $theRide
        ]);

    }


}
