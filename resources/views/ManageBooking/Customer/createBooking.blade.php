@extends('layouts.navigation')

@section('content')
    <div class="container my-5">
        {{-- Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('destroy'))
            <div class="alert alert-danger">
                {{ session('destroy') }}
            </div>
        @endif

        {{-- Main content --}}
        <div class="card p-4 shadow-sm">
            {{-- Header --}}
            <div class="text-center mb-4">
                <h1 class="h3 font-weight-bold">Create Your Catering Booking</h1>
                <p class="text-muted">Fill in the details for your upcoming event</p>
            </div>

            {{-- Form --}}
            <form method="POST" action="{{ url('customer/customer/' .$package->id. '/store-booking') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    {{-- Package Id --}}
                    <input type="hidden" name="packageId" value="{{ $package->id }}">
                    {{-- Customer Name --}}
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Customer Name</label>
                        <input type="text" id="customerName" name="customerName" class="form-control"  value="{{ old('customerName', $user->name) }}" placeholder="e.g., Amira Humairah" required>
                    </div>

                    {{-- Customer Email --}}
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Customer Email</label>
                        <input type="email" id="customerEmail" name="customerEmail" class="form-control" value="{{ old('customerEmail', $user->email) }}" placeholder="e.g., xxxxxxxx@gmail.com" required>
                    </div>

                    {{-- Contact Details --}}
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="tel" id="contactNumber" name="contactNumber" class="form-control" value="{{ old('contactNumber', $user->phone ?? '') }}" placeholder="e.g., +60123456789" required>
                        <div class="invalid-feedback">
                            Please enter a valid phone number
                        </div>
                    </div>
                    <!-- Package Details -->
                    <div class="form-group">
                        <label for="packageName">Package Name</label>
                        <input type="text" name="packageName" id="packageName" class="form-control" 
                            value="{{$package->packageName}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="packageDesc">Package Description</label>
                        <textarea name="packageDesc" id="packageDesc" rows="6" class="form-control" readonly> {{$package->packageDesc}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="packagePrice">Price Per Pax</label>
                        <input type="text" name="packagePrice" id="packagePrice" class="form-control" 
                        value="{{$package->packagePrice}}" readonly>
                    </div>


                    {{-- Number of Pax --}}
                    <div class="mb-3">
                        <label for="numPax" class="form-label">Number of Pax (Guests)</label>
                        <input type="number" id="numPax" name="numPax" class="form-control" min="1" placeholder="Enter number of guests" required > 
                        <div class="invalid-feedback">
                            Please enter a valid number of guests
                        </div>
                    </div>

                    {{-- Additional Notes --}}
                    <div class="mb-3">
                        <label for="notes" class="form-label">Additional Notes</label>
                        <textarea id="notes" name="notes" rows="2" class="form-control" placeholder="Remarks/Notes" required></textarea>
                    </div>

                    {{-- Event Date --}}
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Event Date</label>
                        <input type="text" id="eventDate" name="eventDate" class="form-control" required>
                        <div class="invalid-feedback">
                            Please select a valid event date.
                        </div>
                    </div>

                    {{-- Event Location --}}
                    <div class="mb-3">
                        <label for="eventLocation" class="form-label">Event Location</label>
                        <input type="text" id="eventLocation" name="eventLocation" class="form-control" placeholder="e.g., ABC Hall (full address required)" required>
                        <div class="invalid-feedback">
                            Please insert the event location.
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-4 py-2">Submit Booking</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const eventDateInput = document.getElementById('eventDate');

            // Example of unavailable dates (replace with dynamic data from your backend)
            const unavailableDates = ['2024-12-25', '2024-12-31', '2025-01-01'];

            // Initialize Flatpickr
            flatpickr(eventDateInput, {
                dateFormat: "Y-m-d",  // Input format
                disable: unavailableDates,  // Disable unavailable dates
                minDate: "today", // Prevent past dates from being selected
                onChange: function(selectedDates, dateStr, instance) {
                    // Check if the selected date is unavailable
                    if (unavailableDates.includes(dateStr)) {
                        alert('The date you selected is already booked. Please select another date.');
                        instance.clear();  // Clear the input if the date is unavailable
                    }
                },
                // Highlight unavailable dates in red and show a tooltip
                locale: {
                    firstDayOfWeek: 1,
                    onDayCreate: function(dObj, dStr, fp, dayElem) {
                        // Check if the current day is in the list of unavailable dates
                        if (unavailableDates.includes(dStr)) {
                            // Force the day element to have a red color
                            dayElem.style.color = 'red';

                            // Add the tooltip text to show when hovering over unavailable dates
                            dayElem.title = 'This date is already booked. Please select another date.';
                            
                            // Ensure the styles are applied
                            dayElem.classList.add('unavailable');
                        }
                    }
                }
            });
        });
    </script>

    <style>
        /* Forcefully change color for unavailable dates */
        .flatpickr-day.unavailable {
            color: red !important; /* Important to override any existing styles */
            cursor: not-allowed; /* Show the 'not-allowed' cursor when hovering over unavailable dates */
        }

        /* Optional: change the background color of unavailable dates */
        .flatpickr-day.unavailable:hover {
            background-color: #f8d7da; /* Light red background on hover */
        }

        /* Custom invalid feedback */
        .invalid-feedback {
            display: none;
        }

        /* Display error message when input is invalid */
        input:invalid, textarea:invalid {
            border-color: #e74a3b;
        }

        input:invalid + .invalid-feedback,
        textarea:invalid + .invalid-feedback {
            display: block;
        }
    </style>
@endsection







