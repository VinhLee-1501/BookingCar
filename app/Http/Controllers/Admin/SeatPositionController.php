<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SeatPositionRequest\SeatPositionRequest;
use App\Models\Car;
use App\Models\SeatPosition;
use Illuminate\Http\Request;
class SeatPositionController extends Controller
{
    public function index(Request $request)
    {
        $query = SeatPosition::join('cars', 'seat_positions.cars_id', '=', 'cars.id')
            ->select('seat_positions.id', 'seat_positions.name', 'seat_positions.price',
            'seat_positions.status', 'cars.license_plates as car_license_plates');

        if ($request->has('car_id') && $request->car_id) {
            $query->where('cars.id', $request->car_id);
        }
        if ($request->has('seat_name') && $request->seat_name) {
            $query->where('seat_positions.name', 'like', '%' . $request->seat_name . '%');
        }
        $seat = $query->orderBy('seat_positions.id', 'desc')->paginate(10);
        $cars = Car::all();
        $seatNames = SeatPosition::select('name')->distinct()->get();
        return view('admin.Seat_positions.index', compact('seat', 'cars', 'seatNames'));
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
