<?php

use Illuminate\Support\Facades\Route;

Route::get('signup', function () {
    return view('client.signup');
})->name('signup');
