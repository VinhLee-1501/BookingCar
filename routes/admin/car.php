<?php

use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Route;

Route::middleware('Cars')->group(function () {
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
});
