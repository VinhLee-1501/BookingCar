<?php

use Illuminate\Support\Facades\Route;

Route::get('signin', function () {
    return view('auth.signin');
})->name('signin');