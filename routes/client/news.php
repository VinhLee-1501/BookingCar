<?php

use Illuminate\Support\Facades\Route;

Route::get('news', function () {
    return view('client.news');
})->name('news');
