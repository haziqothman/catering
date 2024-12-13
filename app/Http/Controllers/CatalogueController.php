<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * 
     * ADMINNNNNNNN
     * 
     */

    /**
     * Display all available packages
     */
    public function displayManagePackage(){
        return view('ManageCatalogue.Admin.packageList');
    }

    /**
     * Display edit form with the current data
     */
    public function editPackage(){
        return view('ManageCatalogue.Admin.editPackage');
    }


    /**
     * 
     * 
     * 
     */




    /**
     * 
     * CUSTOMERRRRRRR
     * 
     */
    
    /**
     * Display all available packages
     */
    public function displayPackage(){
        return view('ManageCatalogue.Customer.packageList');
    }

     /**
     * 
     * 
     * 
     */

}
