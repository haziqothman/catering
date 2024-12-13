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
                <form method="#" action="#"  style="width:60%">
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Package Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Price Per Pax</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Minimum Order</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group mb-3">
                        <label for="formGroupExampleInput">Package Description</label>
                        <textarea class="form-control" id="formGroupExampleInput" rows="5" placeholder="Enter description here"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
