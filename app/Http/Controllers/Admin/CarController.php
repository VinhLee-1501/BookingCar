<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = Category::all();
        return view('admin.cars.create', compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->input('name');
        $car->license_plates = $request->input('license_plates');
        $car->category_id = $request->input('category_id');
        $car->save();
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cars = Car::find($id);
        $Categories = Category::all();
        return view('admin.cars.edit', compact('cars', 'Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cars = Car::find($id);
        $cars->name = $request->input('name');
        $cars->license_plates = $request->input('license_plates');
        $cars->category_id = $request->input('category_id');
        $cars->update();
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect()->back()->with('delete', 'Xóa Thành Công');
    }

}
