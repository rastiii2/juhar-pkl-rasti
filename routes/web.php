<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
