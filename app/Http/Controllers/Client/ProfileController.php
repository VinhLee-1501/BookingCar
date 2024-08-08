<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;

        $userTickets = User::join('ticket_booking_cars', 'ticket_booking_cars.user_id', '=', 'users.id')
            ->join('ticket_cars', 'ticket_cars.ticket_booking_id', '=', 'ticket_booking_cars.id')
            ->join('the_rides', 'the_rides.id', '=', 'ticket_cars.the_ride_id')
            ->select(
                'users.id as user_id',
                'users.name as user_name',
                'users.role as user_role',
                'users.phone as user_phone',
                'users.address as user_address',
                'ticket_booking_cars.status as booking_status',
                'ticket_cars.name as ticket_car_name',
                'ticket_cars.created_at as ticket_created_at',
                'the_rides.name as ride_name'
            )
            ->where('users.id', '=', $userId)
            ->get();

            $users = [
                'userTickets' => $userTickets,
                'user' => $user
            ];

            // dd($userTickets);
        return view('client.profile', compact('users'));
    }


    public function edit()
    {
        $user = Auth::user();
        return view('client.editProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',

        ]);


        $users = Auth::User();
        $id = $users->id;
        $user = User :: find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        // dd($user);
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Hồ sơ đã được cập nhật thành công.');


    }
}
