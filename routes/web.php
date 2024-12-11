<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * 
 * Manage Catalogue
 * 
 */

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
