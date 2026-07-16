<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

    // Halaman login
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');


Route::prefix('events')->group(function () {

    // Daftar Event
    Route::get('/', [EventController::class, 'index'])
        ->name('events.index');

    // Detail Event
    Route::get('/{event}', [EventController::class, 'show'])
        ->name('events.show');

    // Form Pendaftaran
    Route::get('/{event}/register', [RegistrationController::class, 'create'])
        ->name('registrations.create');

    // Simpan Pendaftaran
    Route::post('/{event}/register', [RegistrationController::class, 'store'])
        ->name('registrations.store');
    });

    // Halaman sukses
    Route::get('/success', [RegistrationController::class, 'success'])
        ->name('registrations.success');

    // Halaman dashboard admin
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });