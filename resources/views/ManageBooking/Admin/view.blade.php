@extends('layouts.navigation')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Manage Bookings</h1>

    {{-- Filter by Status --}}
    <form method="GET" action="{{ route('admin.bookings.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <label for="status" class="form-label">Filter by Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="" {{ !$selectedStatus ? 'selected' : '' }}>All</option>
                    <option value="pending" {{ $selectedStatus == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="confirmed" {{ $selectedStatus == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ $selectedStatus == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    {{-- Display Bookings --}}
    @if ($bookings->isNotEmpty())
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Event Date</th>
                    <th>Event Location</th>
                    <th>Package</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->customerName }}</td>
                        <td>{{ $booking->eventDate }}</td>
                        <td>{{ $booking->eventLocation }}</td>
                        <td>{{ $booking->package->packageName }}</td>
                        <td>
                            @if ($booking->status == 'confirmed')
                                <span class="badge bg-success">Confirmed</span>
                            @elseif ($booking->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                            @else
                                <span class="badge bg-danger">Cancelled</span>
                            @endif
                        </td>
                        <td>
                            @if ($booking->status == 'pending')
                                <form method="POST" action="{{ route('admin.bookings.approve', $booking->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                </form>
                            @else
                                <button class="btn btn-secondary btn-sm" disabled>Approved</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info text-center">
            No bookings found.
        </div>
    @endif
</div>
@endsection
