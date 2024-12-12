<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () { return view('welcome');});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


/**
 * 
 * Manage Catalogue
 * 
 */

//Admin
Route::get('/admin/testing', function () {
    return 'This is a test response!';
});


//Customer



 /**
 * 
 * 
 * 
 */
