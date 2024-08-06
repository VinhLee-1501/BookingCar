<?php

use App\Http\Controllers\Client\RideFilterController;
use Illuminate\Support\Facades\Route;

Route::get('/schedule/{id}', [RideFilterController::class, 'filterByScheduleId'])
    ->name('ridefilter');
