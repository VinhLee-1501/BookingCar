<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\RideFilterController;
use App\Http\Controllers\Client\SeatPositionController;

Route::get('/schedule/{id}', [RideFilterController::class, 'filterByScheduleId'])
    ->name('ridefilter');
    Route::get('seatPosition/{id}', [SeatPositionController::class, 'getSeatPositions'])->name('seatPosition');