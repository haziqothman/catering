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
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->get('/customerProfile', [CustomerProfileController::class, 'show'])->name('customerProfile.show');
    Route::middleware(['auth'])->get('/customerProfile/edit', [CustomerProfileController::class, 'edit'])->name('customerProfile.edit');
    Route::middleware(['auth'])->post('/customerProfile/update', [CustomerProfileController::class, 'update'])->name('customerProfile.update');
});





/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
   Route::middleware(['auth'])->get('/adminProfile', [AdminProfileController::class, 'show'])->name('adminProfile.show');
   Route::middleware(['auth'])->get('/adminProfile/edit', [AdminProfileController::class, 'edit'])->name('adminProfile.edit');
   Route::middleware(['auth'])->post('/adminProfile/update', [AdminProfileController::class, 'update'])->name('adminProfile.update');
});



/**
 * 
 * Manage Catalogue
 * 
 */

 Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

//Admin
Route::group(['prefix' => 'admin/'], function () {
    Route::get('/manage/package', [CatalogueController::class, 'displayManagePackage'])->name('admin.display.package');
    Route::get('/package/edit', [CatalogueController::class, 'editPackage'])->name('admin.edit.package');
});

//Customer
Route::group(['prefix' => 'customer/'], function(){
    Route::get('/package/list', [CatalogueController::class, 'displayPackage'])->name('customer.display.package');
});


/**
 * 
 * 
 * 
 */

//  Booking 

Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

