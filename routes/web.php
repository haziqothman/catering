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
Route::get('/admin/testing', function () {
    return 'This is a test response!';
});


//Customer



 /**
 * 
 * 
 * 
 */