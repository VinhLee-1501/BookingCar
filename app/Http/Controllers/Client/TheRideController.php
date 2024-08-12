<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TheRides;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TheRideController extends Controller
{
    public function getTheRide(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $departureDate = Carbon::parse($request->input('departureDate'))->format('Y-m-d');

//        dd($departureDate);
        $theRide = TheRides::join('carriage_ways', 'carriage_ways.id', '=', 'the_rides.carriage_way_id')
            ->join('stations as stationTo', 'carriage_ways.car_station_to', '=', 'stationTo.id')
            ->join('stations as stationFrom', 'carriage_ways.car_station_from', '=', 'stationFrom.id')
            ->join('cars', 'the_rides.car_id', '=', 'cars.id')
            ->join('categories', 'cars.category_id', '=', 'categories.id')
            ->join('seat_positions', 'seat_positions.cars_id', '=', 'cars.id')
            ->where('the_rides.start_location', $start)
            ->where('the_rides.end_location', $end)
            ->where('the_rides.time_to_go', 'like', $departureDate . '%')
            ->select('the_rides.*', 'stationTo.name')
            ->groupBy('the_rides.id')
            ->get();

        if ($theRide->isEmpty()) {
            return view('client.booking', [
                'error' => 'Không tìm thấy chuyến đi nào phù hợp với thông tin bạn đã nhập.'
            ]);
        }

        foreach ($theRide as $ride) {
            $departureTime = Carbon::parse($ride->estimated_departure_time);
            $arrivalTime = Carbon::parse($ride->estimated_arrival_time);
            $travelTimeInMinutes = abs($arrivalTime->diffInMinutes($departureTime));

            $hours = intdiv($travelTimeInMinutes, 60);

            $ride->travel_time = "{$hours} giờ";
        }
        $totalAvailableSeats = TheRides::join('seat_positions', 'the_rides.car_id', '=', 'seat_positions.cars_id')
            ->where('seat_positions.status', 1)
            ->distinct('seat_positions.id')
            ->count();

//        dd($theRide);
        return view('client.booking', [
            'theRide' => $theRide,
            'totalAvailableSeats' => $totalAvailableSeats
        ]);
    }
}
