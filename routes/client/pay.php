<?php

use Illuminate\Support\Facades\Route;

Route::get('pay', function () {
return view('client.pay');
})->name('pay');