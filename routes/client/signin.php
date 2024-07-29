<?php

use Illuminate\Support\Facades\Route;

Route::get('signin', function () {
    return view('client.signin');
})->name('signin');
