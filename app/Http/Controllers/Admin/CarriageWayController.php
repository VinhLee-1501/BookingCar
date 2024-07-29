<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarriageWayController extends Controller
{
    public function index()
    {
        return view('admin.carriageWay.index');
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
