<?php

use App\Http\Controllers\Admin\CarriageWayController;
use Illuminate\Support\Facades\Route;

Route::prefix('carriageways')->group(function () {
    Route::get('/', [CarriageWayController::class, 'index'])->name('carriageway');
    Route::get('addCarriageway', [CarriageWayController::class, 'create'])->name('addCarriageway');
    Route::post('storeCarriageWay', [CarriageWayController::class, 'store'])->name('storeCarriageWay');
    Route::get('edit', [CarriageWayController::class, 'edit'])->name('editcarriageway');
    Route::put('update/{$id}', [CarriageWayController::class, 'update'])->name('updatecarriageway');
    Route::delete('destroy/{$id}', [CarriageWayController::class, 'destroy'])->name('deletecarriageway');
});
