<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\TheRideRequest\StoreTheRideRequest;
use App\Models\CarriageWay;
use App\Models\TheRides;
use Illuminate\Http\Request;


class TheRideController extends Controller
{
    public function index(Request $request)
    {
        $query = TheRides::join('carriage_ways', 'the_rides.carriage_way_id', '=', 'carriage_ways.id')
            ->select(
                'the_rides.id',
                'the_rides.name',
                'the_rides.time_to_go',
                'the_rides.estimated_arrival_time',
                'the_rides.estimated_departure_time',
                'the_rides.price',
                'carriage_ways.name as qq'
            );
        if ($request->has('ride_name') && $request->ride_name) {
            $query->where('the_rides.name', 'like', '%' . $request->ride_name . '%');
        }
        if ($request->has('time_to_go') && $request->time_to_go) {
            $query->whereDate('the_rides.time_to_go', $request->time_to_go);
        }
        $Therides = $query->orderBy('the_rides.id', 'desc')->paginate(5);

        return view('admin.theRides.index', compact('Therides'));
    }

    public function addToTheRide(Request $request)
    {
//        $Therides = TheRides::all();
        $carriageWays = CarriageWay::all();
        return view('admin.theRides.create', compact('carriageWays'));
    }

    public function create()
    {

    }

    public function store(StoreTheRideRequest $request)
    {
            TheRides::create($request->validated());
            return redirect()->back()->with('create', 'Thêm Chuyến Xe Thành Công');
    }

    public function edit(string $id)
    {
        $Therides = TheRides::find($id);
        $carriageWays = CarriageWay::all();
        return view('admin.theRides.edit', compact('Therides', 'carriageWays'));
    }

    public function update(StoreTheRideRequest $request, $id)
    {
        $therides = TheRides::find($id);
        $therides->update($request->validated());
        return redirect()->back()->with('update', 'Cập Nhật Chuyến Xe Thành Công');
    }

    public function destroy($id)
    {
        $Therides = TheRides::find($id);
        $Therides->delete();
        return redirect()->back()->with('delete', 'Xóa Thành Công');
    }
}