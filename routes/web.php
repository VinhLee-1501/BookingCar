<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\TheRideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//The_ride
    Route::get('Theride',[TherideController::class,'index'])->name('theride.index');
    Route::get('Add_theride',[TherideController::class,'addToTheRide'])->name('theride.create');
    Route::post('Add_theride',[TherideController::class,'store'])->name('theride.store');
    Route::get('edit_theride/{id}',[TherideController::class,'edit'])->name('theride.edit');
    Route::patch('update_theride/{id}',[TherideController::class,'update'])->name('theride.update');
    Route::delete('delete_theride/{id}',[TherideController::class,'destroy'])->name('theride.destroy');

require __DIR__ . '/auth.php';
