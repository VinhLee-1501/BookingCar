<?php

use Illuminate\Support\Facades\Route;

Route::get('searchTicket', function () {
    return view('client.searchTicket');
})->name('searchTicket');
