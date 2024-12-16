@extends('layouts.navigation')

@section('content')
    <div class="container my-5">
        <!-- Booking Summary Card -->
        <div class="card p-4 shadow-lg rounded-lg bg-light">
            <!-- Header Section -->
            <div class="text-center mb-5">
                <h1 class="h2 font-weight-bold text-primary">Your Catering Booking Summary</h1>
                <p class="text-muted">Review your booking details below. Upload the proof of payment to complete your booking.</p>
            </div>

            <!-- Booking Details -->
            <div class="mb-4">
                <h3 class="text-muted mb-3">Booking Information</h3>
                <div class="row mb-2">
                    <div class="col-12 col-md-6">
                        <p><strong>Customer Name:</strong> {{ $bookingData['customerName'] }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p><strong>Email:</strong> {{ $bookingData['customerEmail'] }}</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-md-6">
                        <p><strong>Contact Number:</strong> {{ $bookingData['contactNumber'] }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p><strong>Package Selected:</strong> {{ ucfirst(str_replace('_', ' ', $bookingData['packageName'])) }}</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-md-6">
                        <p><strong>Number of Pax:</strong> {{ $bookingData['numPax'] }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p><strong>Event Date:</strong> {{ $bookingData['eventDate'] }}</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <p><strong>Event Location:</strong> {{ $bookingData['eventLocation'] }}</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <p><strong>Additional Notes:</strong></p>
                        <p>{{ $bookingData['notes'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Payment Proof Upload Section -->
            <div class="mt-4">
                <h3 class="text-muted mb-4">Upload Your Payment Proof</h3>

                <!-- Show validation error if any -->
                @if ($errors->has('paymentProof'))
                    <div class="alert alert-danger">
                        {{ $errors->first('paymentProof') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('upload.payment.proof') }}" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <div class="mb-4">
                        <input type="file" id="paymentProof" name="paymentProof" class="form-control-file w-full sm:w-auto" required aria-label="Upload payment proof">
                    </div>

                    <!-- Show success message if file uploaded -->
                    @if(session('paymentProofPath'))
                        <div class="alert alert-success">
                            Payment proof uploaded successfully!
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success px-4 py-2 shadow-sm">Upload Payment Proof</button>
                </form>
            </div>

            <!-- Navigation to Edit or Confirm -->
            <div class="mt-5 d-flex justify-content-between">
                <!-- Button to Edit Booking -->
                <a href="{{ route('ManageBooking.Customer.editBooking', ['id' => $bookingData['id']]) }}" class="btn btn-warning text-white">Edit Booking</a>
                <a href="{{ route('ManageBooking.Customer.bookingSummary') }}" class="btn btn-primary text-white">Confirm Booking</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Tailwind CSS for additional custom styling -->
    <style>
        .card {
            border-radius: 15px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-warning {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .invalid-feedback {
            display: block;
        }
        .form-control-file {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 10px;
        }
        .form-control-file:hover {
            border-color: #007bff;
        }
        .btn {
            transition: transform 0.2s ease-in-out;
        }
        .btn:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
