<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StatisticsController;


// Route::get('/', function () {
//     return view('admin.index');
// })->name('dashboard');
Route::prefix('/')->group(function () {
    Route::get('/', [StatisticsController::class, 'index'])->name('dashboard');
    // Route::get('create', [StatisticsController::class, 'create'])->name('addUser');
    // Route::post('store', [StatisticsController::class, 'store'])->name('storeUser');
    // Route::get('edit/{id}', [StatisticsController::class, 'edit'])->name('editUser');
    // Route::put('update/{id}', [StatisticsController::class, 'update'])->name('updateUser');
    // Route::delete('destroy/{id}', [StatisticsController::class, 'destroy'])->name('deleteUser');
});

Route::get('/login', function () {
    return view('admin.login');
})->name('login');
