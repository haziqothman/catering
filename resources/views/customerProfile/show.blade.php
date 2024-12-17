@extends('layouts.navigation')

@section('content')
<div class="container">
    <h1>Feedback Details</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Your Profile') }}</div>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $feedback->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $feedback->name }}</td>
        </tr>
        <tr>
            <th>Feedback:</th>
            <td>{{ $feedback->message }}</td>
        </tr>
        <tr>
            <th>Created At:</th>
            <td>{{ $feedback->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At:</th>
            <td>{{ $feedback->updated_at }}</td>
        </tr>
        {{-- Tampilkan user jika ada relasi --}}
        @if($feedback->user)
            <tr>
                <th>Submitted By:</th>
                <td>{{ $feedback->user->name }}</td> {{-- Asumsi nama field di tabel users adalah 'name' --}}
            </tr>
        @endif
    </table>

    <a href="{{ route('customer.feedback.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection