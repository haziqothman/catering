@extends('layouts.navigation')

@section('content')
    <div class="d-flex justify-content-center" style="width:100%; height:auto">
        {{-- Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }};
            </div>
        @elseif (session('destroy'))
            <div class="alert alert-danger">
                {{ session('destroy') }};
            </div>
        @endif

        {{-- main content --}}
        <div class="row justify-content-center mb-4" style="width:80%; height:auto;">
            {{-- top --}}
            <div class="text-center my-5" style="width: 100%">
                <h1>Create New Package</h1>
            </div>
            {{-- middle --}}
            <div class="mb-3 py-4 d-flex justify-content-center"
                style="background-color:white; width:70%; border-radius:10px; border:1px solid rgb(228, 228, 228)">
                <form method="POST" action="{{ route('admin.store.package') }}" enctype="multipart/form-data"
                    style="width:60%">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Package Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="packageName" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Price Per Pax</label>
                        <input type="number" step="0.01" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="packagePrice" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Minimum Order</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="minimumOrder" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Image</label>
                        <input type="file" accept=".pdf, .png, .jpg, .jpeg" class="form-control"
                            id="formGroupExampleInput" placeholder="" name="packageImage">
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Package Description</label>
                        <textarea class="form-control" id="formGroupExampleInput" rows="5" placeholder="" name="packageDesc" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
