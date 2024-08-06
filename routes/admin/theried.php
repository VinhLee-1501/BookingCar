<?php

use App\Http\Controllers\Admin\TheRideController;
use Illuminate\Support\Facades\Route;

Route::prefix('theried')->group(function () {
    Route::get('Theride', [TherideController::class, 'index'])->name('theride.index');
    Route::get('Add_theride', [TherideController::class, 'addToTheRide'])->name('theride.create');
    Route::post('Add_theride', [TherideController::class, 'store'])->name('theride.store');
    Route::get('edit_theride/{id}', [TherideController::class, 'edit'])->name('theride.edit');
    Route::patch('update_theride/{id}', [TherideController::class, 'update'])->name('theride.update');
    Route::delete('delete_theride/{id}', [TherideController::class, 'destroy'])->name('theride.destroy');
});
