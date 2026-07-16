<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;


Route::get('/', [HomeController::class, 'index'])->name('home');

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