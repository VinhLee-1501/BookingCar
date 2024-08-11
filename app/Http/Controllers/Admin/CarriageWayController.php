<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarriageWay;
use Illuminate\Http\Request;

class CarriageWayController extends Controller
{
    public function index()
    {
        $carriageWays = CarriageWay::leftJoin('the_rides as tr', 'carriage_ways.id', '=', 'tr.carriage_way_id')
            ->select('carriage_ways.id as carriage_way_id', 'carriage_ways.name as carriage_way_name', 'carriage_ways.average_travel_time', 'carriage_ways.distance',
                CarriageWay::raw('COUNT(CASE WHEN DATE(tr.time_to_go) = CURDATE() THEN tr.id ELSE NULL END) as trips_today'),
                CarriageWay::raw('COUNT(CASE WHEN WEEK(tr.time_to_go, 1) = WEEK(CURDATE(), 1) THEN tr.id ELSE NULL END) as trips_this_week'))
            ->groupBy('carriage_ways.id', 'carriage_ways.name', 'carriage_ways.average_travel_time', 'carriage_ways.distance')
            ->get();

        return view('admin.carriageWay.index',compact('carriageWays'));
    }

    public function create()
    {
        return view('admin.carriageWay.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        return view('admin.carriageWay.edit');
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
