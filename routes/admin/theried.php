<?php

use App\Http\Controllers\Admin\TheRideController;
use Illuminate\Support\Facades\Route;

Route::prefix('theried')->group(function () {
    Route::get('/', [TheRideController::class, 'index'])->name('theried');
    Route::get('addTheried', [TheRideController::class, 'create'])->name('addTheried');
    Route::post('storetheried', [TheRideController::class, 'store'])->name('storetheried');
    Route::get('edit/{$id}', [TheRideController::class, 'edit'])->name('edittheried');
    Route::put('update/{$id}', [TheRideController::class, 'update'])->name('updatetheried');
    Route::delete('destroy/{$id}', [TheRideController::class, 'destroy'])->name('deletetheried');
});
