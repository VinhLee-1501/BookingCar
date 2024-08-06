<?php

use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Route;

Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('car.index');
    Route::get('Add_car', [CarController::class, 'create'])->name('car.create');
    Route::post('Add_car', [CarController::class, 'store'])->name('car.store');
    Route::get('edit_car/{id}', [CarController::class, 'edit'])->name('car.edit');
    Route::patch('update_car/{id}', [CarController::class, 'update'])->name('car.update');
    Route::delete('delete_car/{id}', [CarController::class, 'destroy'])->name('car.destroy');
});
