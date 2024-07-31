<?php

use Illuminate\Support\Facades\Route;

Route::get('seatPosition', function () {
    return view('client.seatPosition');
})->name('seatPosition');
