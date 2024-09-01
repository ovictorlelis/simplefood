<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterTenantController;
use Illuminate\Support\Facades\Route;


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::controller(RegisterTenantController::class)->name('tenant.')->group(function () {
            Route::get('register', 'register')->name('register');
            Route::post('register', 'store')->name('store');
        });
    });
}
