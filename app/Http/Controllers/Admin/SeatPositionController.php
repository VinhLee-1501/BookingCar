<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeatPositionRequest\SeatPositionRequest;
use App\Models\Car;
use App\Models\SeatPosition;

class SeatPositionController extends Controller
{
    public function index()
    {
        $seat = SeatPosition::all();
        return view('admin.Seat_positions.index', compact('seat'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('admin.Seat_positions.create', compact('cars'));
    }

    public function store(SeatPositionRequest $request)
    {
        SeatPosition::create($request->validated());
        return redirect()->back()->with('add', 'Thêm Thành Công');
    }


    public function edit($id)
    {
        $seat = SeatPosition::find($id);
        $cars = Car::all();
        return view('admin.Seat_positions.edit', compact('seat', 'cars'));
    }

    public function update(SeatPositionRequest $request, $id)
    {
        $seat = SeatPosition::find($id);
        $seat->update($request->validated());
        return redirect()->back()->with('update', 'Cập Nhật Thành Công',);
    }

    public function destroy($id)
    {
        $seat = SeatPosition::find($id);
        $seat->delete();
        return redirect()->back()->with('delete', 'Xóa Thành Công');
    }
}
