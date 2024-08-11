<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\TicketController;

Route::get('ticket/{{infoUser}}', [TicketController::class, 'show'])->name('ticket');
