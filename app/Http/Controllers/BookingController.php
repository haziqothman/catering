<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * 
     *      ADMIN
     * 
     */


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

    // Pass the bookings to the view
    return view('ManageBooking.Customer.dashboardBooking', compact('bookings'));
    }

    public function create()
    {
        return view('ManageBooking.Customer.createBooking');
    }

    // Store a newly created booking in the database
    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'customerName' => 'required|string',
        'customerEmail' => 'required|email',
        'contactNumber' => 'required|string',
        'packageName' => 'required|string',
        'numPax' => 'required|integer',
        'notes' => 'nullable|string',
        'eventDate' => 'required|date',
        'eventLocation' => 'required|string',
    ]);

    // // Assuming the user is logged in and you're using auth()
    // // If you're not using authentication, replace this with the correct user ID logic
    // $userId = auth()->id(); // Get the authenticated user's ID

    // Create the new booking, including user_id
    Booking::create([
        'customerName' => $request->customerName,
        'customerEmail' => $request->customerEmail,
        'contactNumber' => $request->contactNumber,
        'packageName' => $request->packageName,
        'numPax' => $request->numPax,
        'notes' => $request->notes,
        'eventDate' => $request->eventDate,
        'eventLocation' => $request->eventLocation,
    ]);


        // Redirect back to a page (e.g., customer dashboard) with success message
        return redirect()->route('ManageBooking.Customer.dashboardBooking')->with('success', 'Booking created successfully!');
    }

    // Show the form for editing an existing booking
    public function edit($id)
    {
        // Fetch the booking data by its ID
        $booking = Booking::findOrFail($id); // Retrieve booking or fail if not found
        
        // Pass the booking data to the edit view
        return view('ManageBooking.Customer.editBooking', compact('booking'));
    }

    // Update an existing booking
    public function update(Request $request, $id)
{
    // Validate the incoming form data
    $validatedData = $request->validate([
        'customerName' => 'required|string|max:255',
        'customerEmail' => 'required|email|max:255',
        'contactNumber' => 'required|string|max:20',
        'packageName' => 'required|string|max:255',
        'numPax' => 'required|integer|min:1',
        'notes' => 'nullable|string|max:1000',
        'eventDate' => 'required|date|after_or_equal:today',
        'eventLocation' => 'required|string|max:255',
        'packageImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Retrieve the existing booking record
    $booking = Booking::findOrFail($id); // Fail if not found

    // Update the booking with the validated data (excluding the packageImage initially)
    $booking->update([
        'customerName' => $validatedData['customerName'],
        'customerEmail' => $validatedData['customerEmail'],
        'contactNumber' => $validatedData['contactNumber'],
        'packageName' => $validatedData['packageName'],
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
