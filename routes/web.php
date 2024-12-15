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

/*------------------------------------------
--------------------------------------------
All Customer Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::group(['prefix' => 'customer/'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        /**
         * Manage Catalogue
         */
        Route::get('/package/list', [CatalogueController::class, 'displayPackage'])->name('customer.display.package');

        /**
         * Manage Booking
         */
        Route::get('/customer/dashboard', [BookingController::class, 'show'])->name('ManageBooking.Customer.dashboardBooking');
        Route::get('/booking/create', [BookingController::class, 'create'])->name('ManageBooking.Customer.createBooking');
        Route::post('/customer/store-booking', [BookingController::class, 'store'])->name('customer.store.booking');
        Route::get('/customer/booking/{id}/edit', [BookingController::class, 'edit'])->name('customer.edit.booking');
        Route::put('/customer/booking/{id}', [BookingController::class, 'update'])->name('customer.update.booking');
        Route::get('/booked-dates', [BookingController::class, 'getBookedDates'])->name('booked.dates');
         
        /**
         * Manage Customer Profile
         */
        Route::get('/customerProfile', [CustomerProfileController::class, 'show'])->name('customerProfile.show');
        Route::get('/customerProfile/edit', [CustomerProfileController::class, 'edit'])->name('customerProfile.edit');
        Route::post('/customerProfile/update', [CustomerProfileController::class, 'update'])->name('customerProfile.update');
    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => 'admin/'], function () {
        Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

        /**
         * Manage Catalogue
         */
        Route::get('/manage/package', [CatalogueController::class, 'displayManagePackage'])->name('admin.display.package');
        Route::get('/package/create', [CatalogueController::class, 'createPackage'])->name('admin.create.package');
        Route::post('/package/store', [CatalogueController::class, 'storePackage'])->name('admin.store.package');
        Route::get('/package/{id}/edit', [CatalogueController::class, 'editPackage'])->name('admin.edit.package');

        /**
         * Manage Admin Profile
         */
        Route::get('/adminProfile', [AdminProfileController::class, 'show'])->name('adminProfile.show');
        Route::get('/adminProfile/edit', [AdminProfileController::class, 'edit'])->name('adminProfile.edit');
        Route::post('/adminProfile/update', [AdminProfileController::class, 'update'])->name('adminProfile.update');
    });

});

/**
 * Manage Catalogue (Common Routes)
 */
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

/**
 * Booking
 */
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
