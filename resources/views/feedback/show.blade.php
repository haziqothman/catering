@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Feedback Detail</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $feedback->name }}</h5>
            <p class="card-text">Feedback: {{ $feedback->message }}</p>
        </div>
    </div>
    <a href="{{ route('feedback.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
