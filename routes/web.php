<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\HomeController;

// =====================
// PUBLIC ROUTES
// =====================
Route::get('/', [HomeController::class, 'index'])->name('home');

// =====================
// AUTH ROUTES
// =====================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// PROTECTED ROUTES (Auth Required)
// =====================
Route::middleware('auth')->group(function () {
    Route::resource('fashion', FashionController::class);
    Route::get('fashion-export-pdf', [FashionController::class, 'exportPdf'])->name('fashion.export.pdf');
});