@extends('layouts.navigation')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Customer Dashboard</h1>

        {{-- Button to create a new booking --}}
        <div class="text-center mb-4">
            <a href="{{ route('ManageBooking.Customer.createBooking') }}" class="btn btn-primary">Create New Booking</a>
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
            {{-- Display bookings --}}
            <div class="list-group">
                @foreach ($bookings as $booking)
                    <div class="list-group-item">
                        <h5>{{ $booking->packageName }} ({{ $booking->eventDate }})</h5>
                        <p><strong>Additional Notes:</strong> {{ $booking->notes }}</p>
                        <p><strong>Number of Pax:</strong> {{ $booking->numPax }}</p>
                        <p><strong>Event Location:</strong> {{ $booking->eventLocation }}</p>
                        <a href="{{ route('ManageBooking.Customer.editBooking', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('customer.cancel.booking', $booking->id) }}" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
