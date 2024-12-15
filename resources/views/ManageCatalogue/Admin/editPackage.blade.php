@extends('layouts.navigation')

@section('content')
    <div class="d-flex justify-content-center" style="border: 1px solid black; width:100%; height:auto">

        {{-- main content --}}
        <div class="row justify-content-center mb-4" style="width:80%; height:auto;border: 1px solid black;">
            {{-- top --}}
            <div class="text-center my-5" style="width: 100%">
                <h1>Edit Catalogue</h1>
                <p>Manage Your Catalogue Properly!</p>
            </div>
            {{-- middle --}}
            <div class="mb-3 p-3 d-flex justify-content-center" style="border: 1px solid black; width:100%">
                <form method="POST" action="{{url('admin/update/' .$package->id.'/package')}}" enctype="multipart/form-data" style="width:60%">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="packageName">Package Name</label>
                        <input type="text" class="form-control" id="packageName" name="packageName"
                            value="{{ $package->packageName }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="packagePrice">Price Per Pax</label>
                        <input type="text" class="form-control" id="packagePrice" name="packagePrice"
                            value="{{ $package->packagePrice }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="minimumOrder">Minimum Order</label>
                        <input type="text" class="form-control" id="minimumOrder" name="minimumOrder"
                            value="{{ $package->minimumOrder }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="packageDesc">Package Description</label>
                        <!-- Display the description inside the textarea -->
                        <textarea class="form-control" id="packageDesc" name="packageDesc" rows="5">{{ $package->packageDesc }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="packageImage">Current Package Image</label>
                        <!-- Display the current file (image) -->
                        <div>
                            <img src="{{ asset('package/' . $package->packageImage) }}" alt="Current Package Image"
                                style="max-width: 100%; height: auto; border: 1px solid #ccc;">
                        </div>
                        <input type="file" class="form-control mt-3" id="packageImage" name="packageImage">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
