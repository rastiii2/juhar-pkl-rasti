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
    Route::get('/admin/guru/tambah', [GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/admin/guru/tambah', [GuruController::class, 'store'])->name('admin.guru.store');
    Route::delete('/admin/guru/delete/{id}', [GuruController::class, 'delete'])->name('admin.guru.delete');

    
});

