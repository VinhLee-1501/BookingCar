<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('create', [UserController::class, 'create'])->name('addUser');
    Route::post('store', [UserController::class, 'store'])->name('storeUser');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('update/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('deleteUser');
});
