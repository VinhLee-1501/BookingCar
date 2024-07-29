<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketCar;
use Illuminate\Support\Facades\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('admin.ticket.index');
    }

    public function showDetail()
    {
        return view('admin.ticket.detail');
    }

    public function showDetail_2()
    {
        return view('admin.ticket.detail-2');
    }

    public function create()
    {
        return view('admin.ticket.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        return view('admin.ticket.edit');
    }

    public function update(Request $request, $id)
    {
        $tick = TicketCar::findOrFail($id);
        $tick->fill($request->all());
        $tick->save();

        return redirect('dashboard/tickets');
    }

    public function destroy($id)
    {
        $tick = TicketCar::findOrFail($id);
        $tick->delete();
    }
}
