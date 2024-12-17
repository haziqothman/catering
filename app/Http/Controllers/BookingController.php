<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * 
     *      ADMIN
     * 
     */
    // View all bookings with status filter
    public function index(Request $request)
    {
        // Get the filter status from the request
        $status = $request->input('status');

        // Query bookings based on filter, if provided
        $query = Booking::query();

        if ($status) {
            $query->where('status', $status);
        }

        $bookings = $query->orderBy('eventDate', 'asc')->get();

        // Return view with bookings and selected status
        return view('ManageBooking.Admin.view', [
            'bookings' => $bookings,
            'selectedStatus' => $status
        ]);
    }

    // Approve booking by updating status to confirmed
    public function approveBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'confirmed';
        $booking->save();

        return redirect()->back()->with('success', 'Booking approved successfully!');
    }




    /**
     * 
     *      CUSTOMER
     * 
     */
    // Show the customer dashboard with their bookings
    
    public function show() 
        {
    // Fetch bookings for the authenticated user or current session
    $bookings = Booking::all();
    $bookings = Booking::with('package')->get();

    // Pass the bookings to the view
    return view('ManageBooking.Customer.dashboardBooking', compact('bookings'));
    }

    public function view($id)
{
    // Fetch the booking by its ID
    $booking = Booking::with('package')->findOrFail($id);

    // Pass the booking details to the view
    return view('ManageBooking.Customer.viewBooking', compact('booking'));
}


    public function create(Request $request, String $id)
    {
        // Find the package by ID
        $package = Package::find($id);
        $user = Auth::user();
    
        // Return the view with the package data
        return view('ManageBooking.Customer.createBooking', ['package' => $package, 'user' => $user]);
    }
    

        // Store a newly created booking in the database
        public function store(Request $request, String $id)
        {
            // Validate the incoming request data
            $validated = $request->validate([
                'customerName' => 'required|string',
                'customerEmail' => 'required|email',
                'contactNumber' => 'required|string',
                'numPax' => 'required|integer',
                'notes' => 'nullable|string',
                'eventDate' => 'required|date',
                'eventLocation' => 'required|string',
            ]);
        
            // Find the package by its ID
            $package = Package::find($id);
        
            // Create the booking using the validated data
            Booking::create([
                'customerName' => $validated['customerName'],
                'customerEmail' => $validated['customerEmail'],
                'contactNumber' => $validated['contactNumber'],
                'packageId' => $package->id, // Store only the package's id
                'numPax' => $validated['numPax'],
                'notes' => $validated['notes'],
                'eventDate' => $validated['eventDate'],
                'eventLocation' => $validated['eventLocation'],
                'userId' => Auth::user()->id,  // Ensure you're saving the user ID correctly
            ]);
        
            // Redirect to the desired route with a success message
            return redirect()->route('ManageBooking.Customer.dashboardBooking')->with('success', 'Booking created successfully!');
        }
        


    // Show the form for editing an existing booking
    public function edit($id)
    {
    $booking = Booking::find($id); // Find the booking by ID
    $packages = Package::all(); // Get all packages

    return view('ManageBooking.Customer.editBooking', compact('booking', 'packages'));
    } 
       
    // Update an existing booking
    public function update(Request $request, $id)
{
    // Validate the incoming form data
    $validatedData = $request->validate([
        'customerName' => 'required|string|max:255',
        'customerEmail' => 'required|email|max:255',
        'contactNumber' => 'required|string|max:20',
        'numPax' => 'required|integer|min:1 max:100000000',
        'notes' => 'nullable|string|max:1000',
        'eventDate' => 'required|date|after_or_equal:today',
        'eventLocation' => 'required|string|max:255',
    ]);

    // Retrieve the existing booking record
    $booking = Booking::findOrFail($id); // Fail if not found

    // Update the booking with the validated data (excluding the packageImage initially)
    $booking->update([
        'customerName' => $validatedData['customerName'],
        'customerEmail' => $validatedData['customerEmail'],
        'contactNumber' => $validatedData['contactNumber'],
        'numPax' => $validatedData['numPax'],
        'notes' => $validatedData['notes'],
        'eventDate' => $validatedData['eventDate'],
        'eventLocation' => $validatedData['eventLocation'],
    ]);

    // Redirect the user back to the booking dashboard with a success message
    return redirect()->route('ManageBooking.Customer.dashboardBooking')->with('success', 'Booking updated successfully!');
}

public function cancel($id)
{
    // Find the booking by its ID
    $booking = Booking::findOrFail($id);
    
    // Update the status to 'cancelled'
    $booking->status = 'cancelled';
    
    // Save the changes to the database
    $booking->save();

    // Redirect to the dashboard with a success message
    return redirect()->route('ManageBooking.Customer.dashboardBooking')->with('success', 'Booking cancelled successfully!');
}


    public function getBookedDates()
    {
    $bookedDates = Booking::pluck('eventDate'); // Fetch all booked dates from the database
    return response()->json($bookedDates); // Return as JSON for the frontend
    }
}
