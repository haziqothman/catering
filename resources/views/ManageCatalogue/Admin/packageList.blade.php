@extends('layouts.navigation')

@section('content')
    <div class="d-flex justify-content-center" style="border: 1px solid black; width:100%; height:auto">

        {{-- main content --}}
        <div class="row justify-content-center mb-4" style="width:80%; height:auto;border: 1px solid black;">
            {{-- top --}}
            <div class="text-center my-5" style="width: 100%">
                <h1>Catalogue</h1>
                <p>Manage Your Catalogue Properly!</p>
            </div>
            {{-- middle --}}
            <div class="mb-3 p-3 d-flex justify-content-between" style="border: 1px solid black; width:100%">
                {{-- Card --}}
                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Delete
                        </button>
                        <a href="{{ route('admin.edit.package') }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Delete</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem; float:left; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Delete</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
