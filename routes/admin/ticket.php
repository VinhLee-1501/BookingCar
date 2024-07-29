<?php

use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Route;

Route::prefix('tickets')->group(function () {
    Route::get('/', [TicketController::class, 'index'])->name('ticket');
    Route::get('addTicket', [TicketController::class, 'create'])->name('addTicket');
    Route::get('detail', [TicketController::class, 'showDetail'])->name('detail');
    Route::get('detail-2', [TicketController::class, 'showDetail_2'])->name('detail-2');
    Route::post('store', [TicketController::class, 'store'])->name('storeTicket');
    Route::get('edit/{id}', [TicketController::class, 'edit'])->name('editticket');
    Route::put('update/{id}', [TicketController::class, 'update'])->name('updateticket');
    Route::delete('destroy/{id}', [TicketController::class, 'destroy'])->name('deleteticket');
});
