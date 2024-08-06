<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TheRides;
use Illuminate\Http\Request;

class TheRideController extends Controller
{
    public function index()
    {
        $Therides = TheRides::all();
        return view('admin.theRides.index', compact('Therides'));
    }

    public function addToTheRide(Request $request)
    {
        return view('admin.theRides.create');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $theride = new TheRides();
        $theride->name = $request->input('name');
        $theride->time_to_go = $request->input('time_to_go');
        $theride->estimated_arrival_time = $request->input('estimated_arrival_time');
        $theride->estimated_departure_time = $request->input('estimated_departure_time');
        $theride->price = $request->input('price');
        $theride->save();
        return redirect()->back()->with('create', 'Thêm Chuyến Xe Thành Công');


    }

    public function edit($id)
    {
        $Therides = TheRides::find($id);
        return view('admin.theRides.edit', compact('Therides'));
    }

    public function update(Request $request, $id)
    {
        $therides = TheRides::find($id);
        $therides->name = $request->input('name');
        $therides->time_to_go = $request->input('time_to_go');
        $therides->estimated_arrival_time = $request->input('estimated_arrival_time');
        $therides->estimated_departure_time = $request->input('estimated_departure_time');
        $therides->price = $request->input('price');
        $therides->update();
        return redirect()->back()->with('update', 'Cập Nhật Chuyến Xe Thành Công');
    }

    public function destroy($id)
    {
        $Therides = TheRides::find($id);
        $Therides->delete();
        return redirect()->back()->with('delete', 'Xóa Thành Công');
    }
}
