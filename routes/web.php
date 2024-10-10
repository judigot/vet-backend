<?php

use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/paypal/payment', [PayPalController::class, 'PaypalPayment'])->name('paypal.payment');
Route::get('/payment/success', [PayPalController::class, 'PaymentSuccess'])->name('payment.success');
Route::get('/payment/cancel', [PayPalController::class, 'PaymentCancel'])->name('payment.cancel');