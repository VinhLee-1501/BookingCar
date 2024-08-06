<?php

use App\Http\Controllers\Client\ScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ScheduleController;


Route::get('schedule', [ScheduleController::class, 'select']

)->name('schedule');