<?php

use App\Http\Controllers\Client\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('edituser', [ProfileController::class, 'edit'])->name('edituser');

Route::put('profile/update', [ProfileController::class, 'update'])->name('update');