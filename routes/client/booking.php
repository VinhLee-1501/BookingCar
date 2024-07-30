<?php

use Illuminate\Support\Facades\Route;

Route::get('booking', function () {
    return view('client.booking');
})->name('booking');