<?php

use App\Http\Controllers\Client\BookingController;
use App\Http\Controllers\Client\TheRideController;
use Illuminate\Support\Facades\Route;

Route::get('booking', [TheRideController::class, 'getTheRide'])->name('booking');

Route::post('booking', [BookingController::class])->name('booking.store');
