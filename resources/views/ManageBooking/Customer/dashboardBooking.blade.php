@extends('layouts.navigation')

@section('content')
    <div class="container my-5">
        <div class="position-relative">
            <h1 class="text-center mb-4">Customer Dashboard</h1>
            <a href="{{ route('customer.display.package') }}" class="position-absolute top-0 end-0 btn btn-primary">Create New Booking</a>
        </div>

        {{-- Display success or error message if any --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Check if there are no bookings --}}
        @if(isset($message))
            <div class="alert alert-info text-center">
                {{ $message }}
            </div>
        @elseif($bookings->isNotEmpty())
            {{-- Display bookings in rows --}}
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Package Name</th>
                            <th>Event Date</th>
                            <th>Event Location</th>
                            <th>Number of Pax</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->package->packageName }}</td>
                                <td>{{ $booking->eventDate }}</td>
                                <td>{{ $booking->eventLocation }}</td>
                                <td>{{ $booking->numPax }}</td>
                                <td>
                                    @if($booking->status == 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @elseif($booking->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @else
                                        <span class="badge bg-danger">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('ManageBooking.Customer.viewBooking', $booking->id) }}" class="btn btn-primary btn-sm">View</a>
                                    
                                    {{-- Conditionally disable the Edit button --}}
                                    <a href="{{ route('ManageBooking.Customer.editBooking', $booking->id) }}" class="btn btn-warning btn-sm 
                                        @if($booking->status == 'confirmed' || $booking->status == 'cancelled') disabled-btn @endif">
                                        Edit
                                    </a>

                                    {{-- Conditionally disable the Cancel button --}}
                                    <a href="{{ route('customer.cancel.booking', $booking->id) }}" class="btn btn-danger btn-sm 
                                        @if($booking->status == 'confirmed' || $booking->status == 'cancelled') disabled-btn @endif"
                                        onclick="return confirmCancel();">
                                        Cancel
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    {{-- Add the custom CSS directly in this Blade file --}}
    <style>
        /* Disable the button functionality and appearance */
        .disabled-btn {
            pointer-events: none; /* Prevent the click event */
            opacity: 0.5; /* Make the button appear disabled */
            cursor: not-allowed; /* Change cursor to indicate that the button is disabled */
        }
    </style>
    {{-- Add the JavaScript to confirm cancel action --}}
    <script>
        function confirmCancel() {
            return confirm("Are you sure you want to cancel the booking?");
        }
    </script>
@endsection
