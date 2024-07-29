<?php

use Illuminate\Support\Facades\Route;

Route::get('schedule', function () {
    return view('client.schedule');
})->name('schedule');
