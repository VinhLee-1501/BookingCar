<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketBookingCar;
use App\Models\TicketCar;
use Illuminate\Support\Facades\Request;

class TicketController extends Controller
{
    public function index()
    {
        $ticketCars = TicketCar::with(['seatPosition', 'theRide.car'])
            ->get()
            ->map(function ($ticketCar) {
                return [
                    'id' => $ticketCar->id,
                    'user_name' => $ticketCar->ticketBookingCar->user->name ?? 'N/A',
                    'seat_position' => $ticketCar->seatPosition->name ?? 'N/A',
                    'status' => $ticketCar->ticketBookingCar->status ?? 'N/A',
                    'name_car' => $ticketCar->theRide->Car->name,
                    'license_plates' => $ticketCar->theRide->car->license_plates ?? 'N/A'
                ];
            });
        return view('admin.ticket.index', compact('ticketCars'));
    }

    public function search(Request $request)
    {
        // Lấy giá trị tìm kiếm từ request
        $searchName = $request->input('search');

        // Kiểm tra nếu không có giá trị tìm kiếm
        if (is_null($searchName)) {
            return response()->json(['html' => '']);
        }
        // Truy vấn dữ liệu với tìm kiếm
        $ticketCars = TicketCar::with(['seatPosition', 'theRide.car', 'ticketBookingCar.user'])
            ->when($searchName, function ($query, $searchName) {
                return $query->whereHas('ticketBookingCar.user', function ($q) use ($searchName) {
                    $q->where('name', 'like', '%' . $searchName . '%');
                });
            })
            ->get()
            ->map(function ($ticketCar) {
                return [
                    'id' => $ticketCar->id,
                    'user_name' => $ticketCar->ticketBookingCar->user->name ?? 'N/A',
                    'seat_position' => $ticketCar->seatPosition->name ?? 'N/A',
                    'status' => $ticketCar->ticketBookingCar->status ?? 'N/A',
                    'name_car' => $ticketCar->theRide->car->name ?? 'N/A',
                    'license_plates' => $ticketCar->theRide->car->license_plates ?? 'N/A'
                ];
            });

        // Render view Blade và trả về HTML
        $html = view('admin.ticket.search', compact('ticketCars'))->render();
        return response()->json(['html' => $html]);
    }

    public function showDetail($id)
    {
        $ticketCar = TicketCar::with(['seatPosition', 'theRide.car'])->findOrFail($id);
        $result = [
            'id' => $ticketCar->id,
            'user_name' => $ticketCar->ticketBookingCar->user->name ?? 'N/A',
            'phone' => $ticketCar->ticketBookingCar->user->phone ?? 'N/A',
            'email' => $ticketCar->ticketBookingCar->user->email ?? 'N/A',
            'seat_position' => $ticketCar->seatPosition->name ?? 'N/A',
            'status' => $ticketCar->ticketBookingCar->status ?? 'N/A',
            'name_car' => $ticketCar->theRide->Car->name,
            'license_plates' => $ticketCar->theRide->car->license_plates ?? 'N/A',
            'time_to_go' => $ticketCar->theRide->time_to_go ?? 'N/A',
            'name_the_ride' => $ticketCar->theRide->name ?? 'N/A',
            'start_location' => $ticketCar->theRide->start_location ?? 'N/A',
            'end_location' => $ticketCar->theRide->end_location ?? 'N/A',
        ];
        return view('admin.ticket.detail', $result);
    }


    public function create()
    {
        return view('admin.ticket.create');
    }

    public function store(Request $request) {}

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
