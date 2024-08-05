<?php

use App\Http\Controllers\Client\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('pay', [PaymentController::class, 'showPaymentPage'])->name('payment');

Route::post('pay/', [PaymentController::class, 'showPaymentPage'])->name('payment');

Route::post('vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');

Route::post('momo_payment', [PaymentController::class, 'momo_payment'])->name('momo_payment');
