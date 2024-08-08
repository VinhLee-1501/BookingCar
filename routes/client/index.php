<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\SeatPositionController;

 Route::get('/', [HomeController::class, 'index'])->name('home');

 Route::get('seatPosition/{id}', [SeatPositionController::class, 'getSeatPositions'])->name('seatPosition');