<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\TicketController;

Route::get('ticket', function () {
    return view('client.ticket');
})->name('ticket');

Route::get('ticket', [TicketController::class, 'show'])->name('ticket');