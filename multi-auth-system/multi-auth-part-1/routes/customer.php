<?php

use App\Http\Controllers\Customer\CustomerDeshboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('customer')->group(function () {

    Route::middleware(['auth', 'role:customer'])->group(function () {
        Route::get('/dashboard', [CustomerDeshboardController::class, 'index'])->name('customer.dashboard');
    });
});
