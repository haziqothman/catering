<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminProfileController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Customer Routes List
--------------------------------------------
--------------------------------------------*/

// Manage User Profile

Route::prefix('customer')->middleware(['auth', 'user-access:customer'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->get('/customerProfile', [CustomerProfileController::class, 'show'])->name('customerProfile.show');
    Route::middleware(['auth'])->get('/customerProfile/edit', [CustomerProfileController::class, 'edit'])->name('customerProfile.edit');
    Route::middleware(['auth'])->post('/customerProfile/update', [CustomerProfileController::class, 'update'])->name('customerProfile.update');

    /**
     * Manage Catalogue
     */
    Route::get('/package/list', [CatalogueController::class, 'displayPackage'])->name('customer.display.package');
});





/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::middleware(['auth'])->get('/profile', [AdminProfileController::class, 'show'])->name('adminProfile.show');
    Route::middleware(['auth'])->get('/profile/edit', [AdminProfileController::class, 'edit'])->name('adminProfile.edit');
    Route::middleware(['auth'])->post('/profile/update', [AdminProfileController::class, 'update'])->name('adminProfile.update');

    // List Users
    Route::get('/users', [AdminProfileController::class, 'listUsers'])->name('adminProfile.users');
    Route::delete('/admin/users/{user}', [AdminProfileController::class, 'deleteUser'])->name('adminProfile.delete');

    /**
     * Manage Catalogue
     */
    Route::get('/manage/package', [CatalogueController::class, 'displayManagePackage'])->name('admin.display.package');
    Route::get('/add/package', [CatalogueController::class, 'createPackage'])->name('admin.create.package');
    Route::post('/store/package', [CatalogueController::class, 'storePackage'])->name('admin.store.package');
    Route::get('/package/{id}/edit', [CatalogueController::class, 'editPackage'])->name('admin.edit.package');
    Route::post('/update/{id}/package', [CatalogueController::class, 'updatePackage'])->name('admin.update.package');
    Route::delete('/destroy/{id}/package', [CatalogueController::class, 'destroyPackage'])->name('admin.destroy.package');
});


/**
 * 
 * 
 * 
 */

//  Booking 

Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
