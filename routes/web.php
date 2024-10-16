<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');
});


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/guru', [GuruController::class, 'guru'])->name('admin.guru');
});

