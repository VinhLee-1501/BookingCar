<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ContactController;
use App\Mail\ExampleMail;

// Route::get('contact', function () {
//     return view('client.contact');
// })->name('contact');

Route::get('contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('send');
Route::post('/email', [ExampleMail::class, 'build'])->name('email');