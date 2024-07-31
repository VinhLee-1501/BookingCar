<?php

use App\Http\Controllers\Client\SearchTicketController;
use Illuminate\Support\Facades\Route;

Route::get('searchTicket', function () {
    return view('client.searchTicket');
})->name('searchTicket');

Route::get('/searchInfoTicket', [SearchTicketController::class, 'showInfoTicket'])->name('searchInfo');
Route::get('/search', [SearchTicketController::class, 'searchTicket'])->name('search');


