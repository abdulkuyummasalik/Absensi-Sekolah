<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk halaman login
Route::get('/', function () {
    return view('auth.login.index'); // Halaman login untuk pengguna yang belum login
})->name('login');

// Middleware untuk mengatur akses setelah login
Route::middleware(['auth'])->group(function () {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        // Rute untuk admin
        Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
            Route::get('/', function() {
                return view('dashboard.admin.index'); // Halaman dashboard admin
            })->name('index');
        });

        // Rute untuk guru (teacher)
        Route::middleware(['role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
            Route::get('/', function() {
                return view('dashboard.teacher.index'); // Halaman dashboard guru
            })->name('index');
        });

        // Rute untuk siswa (student)
        Route::middleware(['role:student'])->prefix('student')->name('student.')->group(function () {
            Route::get('/', function() {
                return view('dashboard.student.index'); // Halaman dashboard siswa
            })->name('index');
        });
    });
});
