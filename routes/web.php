<?php

use App\Http\Controllers\AdminDashboard\AdminDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserDashboard\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Authentication
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'save'])->name('auth.register.store');
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store'])->name('auth.login.store'); 
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');

// Dashboard
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.user');
Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('dashboard.admin');