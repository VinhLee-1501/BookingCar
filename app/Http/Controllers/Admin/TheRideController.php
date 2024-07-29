<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TheRideController extends Controller
{
    public function index()
    {
        return view('admin.theRides.index');
    }

    public function create()
    {
        return view('admin.theRides.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        return view('admin.theRides.edit');
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
