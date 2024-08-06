<?php

use Illuminate\Support\Facades\Route;

Route::get('signup', function () {
    return view('auth.signup');
})->name('signup');
