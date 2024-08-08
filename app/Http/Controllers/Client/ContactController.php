<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Mail\ExampleMail;
use App\Models\TheRides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function showForm()
    {
        // Lấy tất cả các chuyến đi và người dùng hiện tại
        $trips = TheRides::all();
        $user = Auth::user();

        // Truyền dữ liệu đến view
        return view('client.contact', [
            'trips' => $trips,
            'user' => $user,
        ]);
    }

    public function send(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'required|numeric|digits_between:10,11',
            'departure_date' => 'required|date'
        ]);

        // Dữ liệu email
        $contactData = [
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
            'name' => $request->name,
            'phone' => $request->phone,
            'departure_date' => $request->departure_date,
        ];

        // dd($contactData);

        $adminEmail = env('ADMIN_EMAIL', 'nguyethue1905@gmail.com');

        // Gửi email đến địa chỉ quản trị
        Mail::to($adminEmail)->send(new ExampleMail($contactData));

        // Trở lại trang trước với thông báo thành công
        return back()->with('success', 'Thông tin đã được gửi thành công.');
        
    }
}