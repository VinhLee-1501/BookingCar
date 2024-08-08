<?php

use App\Http\Controllers\Client\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::get('schedule', [ScheduleController::class, 'select']

)->name('schedule');
