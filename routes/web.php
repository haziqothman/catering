<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


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


    });
});

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');


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
        
    });
});


// Manage User Profile
    
    
// Route to view the profile
Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'show'])->name('profile.show');

// Route to edit the profile
Route::middleware(['auth'])->get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route to update the profile
Route::middleware(['auth'])->post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

//  Booking 

Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');

