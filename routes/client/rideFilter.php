<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\RideFilterController;

Route::get('/schedule/{id}', [RideFilterController::class, 'filterByScheduleId'])
    ->name('ridefilter');