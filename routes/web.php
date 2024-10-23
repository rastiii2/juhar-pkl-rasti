<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DudiController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\PembimbingController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\GuruLoginController;
use App\Models\Admin\Dudi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');

    Route::get('/guru/login', [GuruLoginController::class, 'login'])->name('guru.login');
    Route::post('/guru/login', [GuruLoginController::class, 'auth'])->name('guru.auth');
});


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::put('/admin/profile/upadate', [AdminController::class, 'update'])->name('admin.profile.update');
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

    Route::get('/admin/pembimbing', [PembimbingController::class, 'pembimbing'])->name('admin.pembimbing');
    Route::get('/admin/pembimbing/tambah', [PembimbingController::class, 'create'])->name('admin.pembimbing.create');
    Route::post('/admin/pembimbing/tambah', [PembimbingController::class, 'store'])->name('admin.pembimbing.store');
    Route::get('/admin/pembimbing/edit/{id}', [PembimbingController::class, 'edit'])->name('admin.pembimbing.edit');
    Route::put('/admin/pembimbing/edit/{id}', [PembimbingController::class, 'update'])->name('admin.pembimbing.update');
    Route::get('/admin/pembimbing/delete/{id}', [PembimbingController::class, 'delete'])->name('admin.pembimbing.delete');

    Route::get('/admin/pembimbing/{id}/siswa', [SiswaController::class, 'siswa'])->name('admin.pembimbing.siswa');
    Route::get('/admin/pembimbing/{id}/siswa/tambah', [SiswaController::class, 'create'])->name('admin.pembimbing.siswa.create');
    Route::post('/admin/pembimbing/{id}/siswa/tambah', [SiswaController::class, 'store'])->name('admin.pembimbing.siswa.store');
    Route::get('/admin/pembimbing/{id}/siswa/edit/{id_siswa}', [SiswaController::class, 'edit'])->name('admin.pembimbing.siswa.edit');
    Route::put('/admin/pembimbing/{id}/siswa/edit/{id_siswa}', [SiswaController::class, 'update'])->name('admin.pembimbing.siswa.update');
    Route::get('/admin/pembimbing/{id}/siswa/delete/{id_siswa}', [SiswaController::class, 'delete'])->name('admin.pembimbing.siswa.delete');

});



