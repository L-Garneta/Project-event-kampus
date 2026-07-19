<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\DashboardController;

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
Route::get('/registration-success/{registration}', [RegistrationController::class, 'success'])
    ->name('registrations.success');

// Download Bukti Registrasi PDF
Route::get('/registration/{registration}/pdf', [RegistrationController::class, 'downloadPdf'])
    ->name('registration.pdf');

// Halaman dashboard admin

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get(
        '/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard');

    Route::resource('events', AdminEventController::class);

    Route::resource('categories', CategoryController::class)
        ->except('show');

    Route::resource('organizations', OrganizationController::class)
        ->except('show');

    Route::resource('registrations', AdminRegistrationController::class)
        ->only(['index', 'show', 'destroy']);
});
