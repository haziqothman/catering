<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Customer Routes
Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::prefix('customer')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        // Manage Catalogue
        Route::get('/package/list', [CatalogueController::class, 'displayPackage'])->name('customer.display.package');

        // Customer Profile
        Route::get('/profile', [CustomerProfileController::class, 'show'])->name('customerProfile.show');
        Route::get('/profile/edit', [CustomerProfileController::class, 'edit'])->name('customerProfile.edit');
        Route::post('/profile/update', [CustomerProfileController::class, 'update'])->name('customerProfile.update');
    });
});

// Admin Routes
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

        // Manage Catalogue
        Route::get('/manage/package', [CatalogueController::class, 'displayManagePackage'])->name('admin.display.package');
        Route::get('/package/{id}/edit', [CatalogueController::class, 'editPackage'])->name('admin.edit.package');

        // Admin Profile
        Route::get('/profile', [AdminProfileController::class, 'show'])->name('adminProfile.show');
        Route::get('/profile/edit', [AdminProfileController::class, 'edit'])->name('adminProfile.edit');
        Route::post('/profile/update', [AdminProfileController::class, 'update'])->name('adminProfile.update');
    });
});

// General Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

    // Booking
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
