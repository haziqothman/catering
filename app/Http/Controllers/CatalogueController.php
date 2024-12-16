<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends Controller
{
    /**
     * 
     *      ADMINNNNNNNN
     * 
     */

    /**
     * Display all available packages
     */
    public function displayManagePackage(Request $request)
    {
        $packageQuery = Package::query();
        $search = $request->input('search');
        $filter = $request->input('filter');

        // Searching
        if ($search) {
            $packageQuery->where('packageName', 'like', "%$search%");
        }

        //Filter
        if ($filter) {
            switch ($filter) {
                case 'minOrder100':
                    $packageQuery->where('minimumOrder', '>=', 100);
                    break;
                case 'minOrder200':
                    $packageQuery->where('minimumOrder', '>=', 200);
                    break;
                case 'minOrder500':
                    $packageQuery->where('minimumOrder', '>=', 500);
                    break;
                case 'priceBelow10':
                    $packageQuery->where('packagePrice', '<', 10);
                    break;
                case 'priceBelow20':
                    $packageQuery->where('packagePrice', '<', 20);
                    break;
                case 'priceBelow30':
                    $packageQuery->where('packagePrice', '<', 30);
                    break;
            }
        }

        $package = $packageQuery->paginate(6);

        return view('ManageCatalogue.Admin.packageList', ['package' => $package]);
    }



    /**
     * Display create new package form
     */
    public function createPackage()
    {
        return view('ManageCatalogue.Admin.addPackage');
    }

    /**
     * Store created package
     */
    public function storePackage(Request $request)
    {
        $package = new Package();

        $request->validate([
            'packageName' => ['required', 'string', 'max:255'],
            'packagePrice' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{1,2})?$/'],
            'minimumOrder' => ['required', 'integer'],
            'packageImage' => ['mimes:png,jpeg,jpg,pdf', 'max:2048'],
        ]);

        $package->packageName = $request->packageName;
        $package->packagePrice = $request->packagePrice;
        $package->minimumOrder = $request->minimumOrder;
        $package->packageDesc = $request->packageDesc;
        $package->userId = Auth::user()->id;

        // Check if an image file is uploaded
        $filePath = public_path('package');

        if ($request->hasFile('packageImage')) {
            $file = $request->file('packageImage');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            $package->packageImage = $file_name;
        }

        $package->save();

        return redirect()->route('admin.display.package')->with('success', 'Package created successfully!');
    }

    /**
     * Display edit form with the current data
     */
    public function editPackage(String $id)
    {
        $package = Package::where('id', $id)->first();

        return view('ManageCatalogue.Admin.editPackage', ['package' => $package]);
    }

    /**
     * Update data in the database
     */
    public function updatePackage(Request $request, String $id)
    {
        $package = Package::find($id);

        $request->validate([
            'packageName' => ['required', 'string', 'max:255'],
            'packagePrice' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{1,2})?$/'],
            'minimumOrder' => ['required', 'integer'],
            'packageImage' => ['mimes:png,jpeg,jpg,pdf', 'max:2048'],
        ]);

        $package->packageName = $request->packageName;
        $package->packagePrice = $request->packagePrice;
        $package->minimumOrder = $request->minimumOrder;
        $package->packageDesc = $request->packageDesc;

        $filePath = public_path('package');

        if ($request->hasFile('packageImage')) {
            $file = $request->file('packageImage');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            // Delete the old logo if it exists
            if ($package->packageImage && file_exists($filePath . '/' . $package->packageImage)) {
                unlink($filePath . '/' . $package->packageImage);
            }
            $package->packageImage = $file_name;
        }

        $package->save();

        return redirect()->route('admin.display.package')->with('success', 'Package updated successfully!');
    }

    public function destroyPackage(String $id)
    {
        $package = Package::find($id);

        if (!$package) {
            return redirect()->route('admin.display.package')->with('error', 'Package not found.');
        }

        $filePath = public_path('package');
        if ($package->packageImage && file_exists($filePath . '/' . $package->packageImage)) {
            unlink($filePath . '/' . $package->packageImage);
        }

        $package->delete();
        return redirect()->route('admin.display.package')->with('destroy', 'Package deleted successfully!');
    }


    /**
     * 
     *      CUSTOMERRRRRRR
     * 
     */

    /**
     * Display all available packages
     */
    public function displayPackage(Request $request)
    {
        $packageQuery = Package::query();
        $search = $request->input('search');
        $filter = $request->input('filter');

        if ($search) {
            $packageQuery = Package::where('packageName', 'like', "%$search%");
        }

        if ($filter) {
            switch ($filter) {
                case 'minOrder100':
                    $packageQuery->where('minimumOrder', '>=', 100);
                    break;
                case 'minOrder200':
                    $packageQuery->where('minimumOrder', '>=', 200);
                    break;
                case 'minOrder500':
                    $packageQuery->where('minimumOrder', '>=', 500);
                    break;
                case 'priceBelow10':
                    $packageQuery->where('packagePrice', '<', 10);
                    break;
                case 'priceBelow20':
                    $packageQuery->where('packagePrice', '<', 20);
                    break;
                case 'priceBelow30':
                    $packageQuery->where('packagePrice', '<', 30);
                    break;
            }
        }

        $package = $packageQuery->paginate(6);
        $allPackages = Package::all();

        return view('ManageCatalogue.Customer.packageList', ['package' => $package, 'allPackages' => $allPackages]);
    }

    /**
     * 
     * 
     * 
     */
}
