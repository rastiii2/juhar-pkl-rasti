<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DudiController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Models\Admin\Dudi;
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
    Route::get('/admin/guru/delete/{id}', [GuruController::class, 'delete'])->name('admin.guru.delete');
    Route::get('/admin/guru/edit/{id}', [GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/admin/guru/edit/{id}', [GuruController::class, 'update'])->name('admin.guru.update');
    Route::get('/admin/dudi', [DudiController::class, 'dudi'])->name('admin.dudi');
    Route::get('/admin/dudi/tambah', [DudiController::class, 'create'])->name('admin.dudi.create');
    Route::post('/admin/dudi/tambah', [DudiController::class, 'store'])->name('admin.dudi.store');
    Route::get('/admin/dudi/delete/{id}', [DudiController::class, 'delete'])->name('admin.dudi.delete');
    Route::get('/admin/dudi/edit/{id}', [DudiController::class, 'edit'])->name('admin.dudi.edit');
    Route::put('/admin/dudi/edit/{id}', [DudiController::class, 'update'])->name('admin.dudi.update');

});

