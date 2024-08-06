<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;

Route::group([], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');


});