<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::name('auth.')->group(function () {
    Route::get('/', [AuthController::class, 'indexLogin'])->name('login.index');

    Route::prefix('register')->name('register.')->group(function () {
        Route::get('/', [AuthController::class, 'indexRegister'])->name('index');
    });

    Route::prefix('forgot-password')->name('forgot.')->group(function () {
        Route::get('/', [AuthController::class, 'indexForgot'])->name('index');
    });
});

Route::prefix('panel')->name('panel.')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
});
