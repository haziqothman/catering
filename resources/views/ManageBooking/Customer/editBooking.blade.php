@extends('layouts.navigation')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            {{-- Edit Booking Form --}}
            <div class="col-md-8 col-lg-6 p-4 bg-white rounded shadow-lg border">
                
                {{-- Form Header --}}
                <div class="text-center mb-4">
                    <h1 class="h3 font-weight-semibold text-gray-700">Edit Booking</h1>
                    <p class="text-muted">Update your booking details below</p>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('customer.update.booking', $booking->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- Indicating that it's an update request --}}
                    
                    {{-- Customer Name --}}
                    <div class="form-group mb-3">
                        <label for="customerName" class="form-label">Customer Name</label>
                        <input type="text" id="customerName" name="customerName" value="{{ old('customerName', $booking->customerName) }}" class="form-control" placeholder="e.g., Amira Humairah" required>
                    </div>

                    {{-- Customer Email --}}
                    <div class="form-group mb-3">
                        <label for="customerEmail" class="form-label">Customer Email</label>
                        <input type="email" id="customerEmail" name="customerEmail" value="{{ old('customerEmail', $booking->customerEmail) }}" class="form-control" placeholder="e.g., xxxxxxxx@gmail.com" required>
                    </div>

                    {{-- Contact Number --}}
                    <div class="form-group mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="tel" id="contactNumber" name="contactNumber" value="{{ old('contactNumber', $booking->contactNumber) }}" class="form-control" placeholder="e.g., +60123456789" required>
                    </div>

                    {{-- Package Name --}}
                    <div class="form-group mb-3">
                        <label for="packageName" class="form-label">Select Package</label>
                        <select id="packageName" name="packageName" class="form-select" required>
                            <option value="" disabled>Select a package</option>
                            <option value="Wedding Special" {{ old('packageName', $booking->packageName) == 'wedding_special' ? 'selected' : '' }}>Wedding Special</option>
                            <option value="Birthday Bash" {{ old('packageName', $booking->packageName) == 'birthday_bash' ? 'selected' : '' }}>Birthday Bash</option>
                            <option value="Corporate Event" {{ old('packageName', $booking->packageName) == 'corporate_event' ? 'selected' : '' }}>Corporate Event</option>
                            <option value="Casual Gathering" {{ old('packageName', $booking->packageName) == 'casual_gathering' ? 'selected' : '' }}>Casual Gathering</option>
                        </select>
                    </div>

                    {{-- Number of Pax --}}
                    <div class="form-group mb-3">
                        <label for="numPax" class="form-label">Number of Pax (Guests)</label>
                        <input type="number" id="numPax" name="numPax" value="{{ old('numPax', $booking->numPax) }}" min="1" max="10000000" class="form-control" placeholder="Enter number of guests" required>
                    </div>

                    {{-- Additional Notes --}}
                    <div class="form-group mb-3">
                        <label for="notes" class="form-label">Additional Notes</label>
                        <textarea id="notes" name="notes" rows="4" class="form-control" placeholder="Remarks/Notes" required>{{ old('notes', $booking->notes) }}</textarea>
                    </div>

                    {{-- Event Date --}}
                    <div class="form-group mb-3">
                        <label for="eventDate" class="form-label">Event Date</label>
                        <input type="text" id="eventDate" name="eventDate" value="{{ old('eventDate', $booking->eventDate) }}" class="form-control" required>
                    </div>

                    {{-- Event Location --}}
                    <div class="form-group mb-3">
                        <label for="eventLocation" class="form-label">Event Location</label>
                        <input type="text" id="eventLocation" name="eventLocation" value="{{ old('eventLocation', $booking->eventLocation) }}" class="form-control" placeholder="e.g., ABC Hall (full address required)" required>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5 py-3">Update Booking</button>
                    </div>
                </form>
            </div>
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

    <script>
        // Automatically hide the success message after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000); // 5000ms = 5 seconds
            }
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
    </style>
@endsection
