<?php

use Illuminate\Support\Facades\Route;

Route::get('about', function () {
    return view('client.about');
})->name('about');
