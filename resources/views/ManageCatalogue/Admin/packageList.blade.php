@extends('layouts.navigation')

@section('content')
    <div class="d-flex justify-content-center" style="width:100%; height:auto">

        {{-- main content --}}
        <div class="row justify-content-center mb-4" style="width:80%; height:auto;">
            {{-- top --}}
            <div class="text-center my-5" style="width: 100%">
                <h1>Catalogue</h1>
                <p>Manage Your Catalogue Properly!</p>
            </div>
            {{-- middle --}}
            <div class="container" style="border: 1px solid black; width:100%">
                {{-- Top div --}}
                <div class="mb-3 p-3 pe-0 d-flex justify-content-between align-items-center"
                    style="border: 1px solid black; width:100%">

                    {{-- Search --}}
                    <div class="d-flex justify-content-center align-items-center ms-0"
                        style="width: 100%; margin-right: auto; margin-left:28px">
                        <div class="d-flex align-items-center pt-3 ps-2 pe-2"
                            style="border: 1px solid rgb(134, 134, 134); border-radius:10px; width:400px; height:35px; box-shadow: 1px 1px 10px #00000042;">
                            <form action="" method="GET" class="d-flex justify-content-between align-items-center"
                                style="width:100%; border-radius:10px">
                                <input type="text" placeholder="Search" name="search"
                                    style="border: none; outline: none; color:rgb(61, 61, 61); width:100%" />
                                <button style="border: none; outline: none; background-color:transparent">
                                    <svg style="color: grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        width="18" height="18" fill="currentColor">
                                        <path
                                            d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- ADD button --}}
                    <a href="{{route('admin.create.package')}}">
                        <button type="button" class="btn btn-secondary">+</button>
                    </a>

                </div>

                {{-- Cards Section --}}
                <div class="d-flex justify-content-center flex-wrap gap-3 mt-3 mb-4"
                    style="border: 1px solid black; width:100%">
                    @foreach ($package as $item )
                    {{-- Card 1 --}}
                    <div class="card" style="width: 25rem; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                        <img class="card-img-top" src="{{ asset('package/' . $item->packageImage) }}" alt="Package image" style="height:100%; width:auto">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->packageName}}</h5>
                            <p class="card-text">{{$item->packageDesc}}</p>
                            <p class="card-text">RM {{$item->packagePrice}}</p>
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Delete
                            </a>
                            <a href="{{url('admin/package/' .$item->id. '/edit')}}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="paginate" class="d-flex justify-content-center" class="">{{ $package->links() }}
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
                <h5 class="modal-title" id="packageName">Delete Package</h5>
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
