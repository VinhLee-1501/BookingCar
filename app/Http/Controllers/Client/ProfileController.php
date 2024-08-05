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
        // dd($user->name);
        return view('client.profile', compact('user'));
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
        $user = User:: find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        // dd($user);
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Hồ sơ đã được cập nhật thành công.');


    }
}
