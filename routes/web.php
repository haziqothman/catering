<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
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
        Route::get('/customer/booking/{id}/edit', [BookingController::class, 'edit'])->name('ManageBooking.Customer.editBooking');
        Route::put('/customer/booking/{id}', [BookingController::class, 'update'])->name('customer.update.booking');
        Route::get('/booking/{id}/cancel', [BookingController::class, 'cancel'])->name('customer.cancel.booking');
        Route::get('/booked-dates', function () {
            $bookedDates = ['2024-12-25', '2024-12-31']; // Replace with dynamic booked dates from DB
            return response()->json($bookedDates);
        })->name('booked.dates');
         
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
    Route::get('/add/package', [CatalogueController::class, 'createPackage'])->name('admin.create.package');
    Route::post('/store/package', [CatalogueController::class, 'storePackage'])->name('admin.store.package');
    Route::get('/package/{id}/edit', [CatalogueController::class, 'editPackage'])->name('admin.edit.package');
    Route::post('/update/{id}/package', [CatalogueController::class, 'updatePackage'])->name('admin.update.package');
    Route::delete('/destroy/{id}/package', [CatalogueController::class, 'destroyPackage'])->name('admin.destroy.package');

        /**
         * Manage Admin Profile
         */
        Route::get('/adminProfile', [AdminProfileController::class, 'show'])->name('adminProfile.show');
        Route::get('/adminProfile/edit', [AdminProfileController::class, 'edit'])->name('adminProfile.edit');
        Route::post('/adminProfile/update', [AdminProfileController::class, 'update'])->name('adminProfile.update');

        // List Users
        Route::get('/users', [AdminProfileController::class, 'listUsers'])->name('adminProfile.users.index');
        Route::get('/admin/profile/users', [AdminProfileController::class, 'listUsers'])->name('adminProfile.users.index');
        Route::get('/users', [AdminProfileController::class, 'listUsers'])->name('adminProfile.users');
        Route::delete('/admin/users/{user}', [AdminProfileController::class, 'deleteUser'])->name('adminProfile.delete');
        Route::post('/admin/store', [AdminProfileController::class, 'store'])->name('adminProfile.store');
        Route::get('/admin/create', [AdminProfileController::class, 'create'])->name('adminProfile.create');
        Route::get('/admin/users/{id}/edit', [AdminProfileController::class, 'editUser'])->name('adminProfile.users.editUser');
        Route::put('/admin/users/{id}', [AdminProfileController::class, 'updateUser'])->name('adminProfile.updateUser');
    });
    
});

