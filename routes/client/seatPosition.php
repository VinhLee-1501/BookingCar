<?php

use Illuminate\Support\Facades\Route;

Route::get('seatPosition/{id}', [SeatPositionController::class, 'getSeatPositions'])->name('seatPosition');
