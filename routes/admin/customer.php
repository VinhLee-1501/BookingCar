<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customer');
    Route::get('create', [CustomerController::class, 'create'])->name('addcustomer');
    Route::post('store', [CustomerController::class, 'store'])->name('storecustomer');
    Route::get('edit/{$id}', [CustomerController::class, 'edit'])->name('editcustomer');
    Route::put('update', [CustomerController::class, 'update'])->name('updatecustomer');
    Route::delete('destroy/{$id}', [CustomerController::class, 'destroy'])->name('deletecustomer');
});
