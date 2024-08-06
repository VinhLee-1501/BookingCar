<?php

use App\Http\Controllers\Admin\SeatPositionController;
use Illuminate\Support\Facades\Route;

Route::prefix('seatpositions')->group(function () {
    Route::get('/', [SeatPositionController::class, 'index'])->name('seatposition');
    Route::get('Add_seat', [SeatPositionController::class, 'create'])->name('seat.create');
    Route::post('Add_seat', [SeatPositionController::class, 'store'])->name('seat.store');
    Route::get('edit_seat/{id}', [SeatPositionController::class, 'edit'])->name('seat.edit');
    Route::patch('update_seat/{id}', [SeatPositionController::class, 'update'])->name('seat.update');
    Route::delete('delete_seat/{id}', [SeatPositionController::class, 'destroy'])->name('seat.destroy');
});
