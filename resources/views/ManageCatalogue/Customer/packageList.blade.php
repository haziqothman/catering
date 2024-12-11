@extends('layouts.navigation')

@section('content')
    <div class="d-flex justify-content-center" style="border: 1px solid black; width:100%; height:auto">

        {{-- main content --}}
        <div class="row justify-content-center mb-4" style="width:80%; height:auto;border: 1px solid black;">
            {{-- top --}}
            <div class="text-center my-5" style="width: 100%">
                <h1>Catalogue</h1>
                <p>Explore our valueable packages for your memorial events!</p>
            </div>
            {{-- middle --}}
            <div class="mb-3 p-3 d-flex justify-content-between" style="border: 1px solid black; width:100%">
                {{-- Card --}}
                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
