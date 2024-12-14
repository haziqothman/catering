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
            <div class="container" style="width:100%">
                {{-- Top div --}}
                <div class="mb-3 p-3 pe-0 ps-0 d-flex justify-content-between align-items-center" style="width:100%">

                    {{-- Filter button --}}
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="25" height="auto" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.75 2.25H1.25C1.05109 2.25 0.860322 2.17098 0.71967 2.03033C0.579018 1.88968 0.5 1.69891 0.5 1.5C0.5 1.30109 0.579018 1.11032 0.71967 0.96967C0.860322 0.829018 1.05109 0.75 1.25 0.75H14.75C14.9489 0.75 15.1397 0.829018 15.2803 0.96967C15.421 1.11032 15.5 1.30109 15.5 1.5C15.5 1.69891 15.421 1.88968 15.2803 2.03033C15.1397 2.17098 14.9489 2.25 14.75 2.25ZM12.25 5.75H3.75C3.55109 5.75 3.36032 5.67098 3.21967 5.53033C3.07902 5.38968 3 5.19891 3 5C3 4.80109 3.07902 4.61032 3.21967 4.46967C3.36032 4.32902 3.55109 4.25 3.75 4.25H12.25C12.4489 4.25 12.6397 4.32902 12.7803 4.46967C12.921 4.61032 13 4.80109 13 5C13 5.19891 12.921 5.38968 12.7803 5.53033C12.6397 5.67098 12.4489 5.75 12.25 5.75ZM9.25 9.25H6.75C6.55109 9.25 6.36032 9.17098 6.21967 9.03033C6.07902 8.88968 6 8.69891 6 8.5C6 8.30109 6.07902 8.11032 6.21967 7.96967C6.36032 7.82902 6.55109 7.75 6.75 7.75H9.25C9.44891 7.75 9.63968 7.82902 9.78033 7.96967C9.92098 8.11032 10 8.30109 10 8.5C10 8.69891 9.92098 8.88968 9.78033 9.03033C9.63968 9.17098 9.44891 9.25 9.25 9.25Z"
                                    fill="#292929" />
                            </svg>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><span class="ms-3">Quantity</span></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'minOrder100']) }}">> 100
                                    pax</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'minOrder200']) }}">> 200
                                    pax</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'minOrder500']) }}">> 500
                                    pax</a></li>
                            <hr>
                            <li><span class="ms-3">Price</span></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'priceBelow10']) }}">
                                    < RM10.00 per pax</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'priceBelow20']) }}">
                                    < RM20.00 per pax</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('customer.display.package', ['filter' => 'priceBelow30']) }}">
                                    < RM30.00 per pax</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Search --}}
                    <div class="d-flex justify-content-center align-items-center ms-1 "
                        style="width: 100%; margin-right: auto; margin-left:28px">
                        <div class="d-flex align-items-center px-2"
                            style="border: 1px solid rgb(134, 134, 134); border-radius:10px; width:400px; height:35px; box-shadow: 1px 1px 10px #00000042;">
                            <form action="{{ route('customer.display.package') }}" method="GET"
                                class="d-flex justify-content-between align-items-center"
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

                    {{-- Compare button --}}
                    <div>
                        <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#compareModal">
                            Compare
                        </button>
                    </div>
                </div>

                {{-- Cards Section --}}
                <div class="d-flex justify-content-center flex-wrap gap-3 mt-3 mb-4" style="width:100%">
                    @foreach ($package as $item)
                        {{-- Card 1 --}}
                        <div class="card" style="width: 24rem; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                            <img class="card-img-top" src="{{ asset('package/' . $item->packageImage) }}"
                                alt="Package image" style="height:100%; width:auto">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->packageName }}</h5>
                                <p class="card-text">{{ $item->packageDesc }}</p>
                                <p class="card-text">Minimum order: {{ $item->minimumOrder }}</p>
                                <p class="card-text">RM {{ $item->packagePrice }} per pax</p>
                                <a href="" class="btn btn-primary">Book Now!</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Pagination --}}
                <div id="paginate" class="d-flex justify-content-center mt-3">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            @if ($package->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $package->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            @endif

                            @foreach ($package->links()->elements[0] as $page => $url)
                                <li class="page-item {{ $package->currentPage() == $page ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($package->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $package->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

{{-- Compare function modal --}}
<div class="modal fade" id="compareModal" tabindex="-1" aria-labelledby="compareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Change modal-lg to modal-xl -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compareModalLabel">Compare Packages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-0">
                <div class="px-5 mx-0 d-flex justify-content-between" style="padding: 20px; ">
                    @foreach (range(1, 3) as $i)
                        <div class="me-1 ms-0" style="margin: 5px; width:350px">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    id="dropdownMenu{{ $i }}">
                                    Select Package
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($allPackages as $package)
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                onclick='selectPackage({{ $i }}, {{ json_encode($package->packageName) }}, {{ $package->packagePrice }}, {{ $package->minimumOrder }}, {{ json_encode($package->packageDesc) }});'>
                                                {{ $package->packageName }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- Display elements --}}
                            <div class="mt-3" id="packageDetails{{ $i }}"
                                style="display: none; border: 1px solid #bbbbbb; padding: 10px; border-radius: 5px; box-shadow: 5px 5px 8px rgb(224, 224, 224);">
                                <p><strong id="packageName{{ $i }}"></strong></p>
                                <p><span id="packageDesc{{ $i }}"></span></p>
                                <p>RM <span id="packagePrice{{ $i }}"></span></p>
                                <p>Minimum Order:<span id="packageOrder{{ $i }}"></span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- JS for displaying selected compare package --}}
<script>
    function selectPackage(index, name, price, order, desc) {
        // Update the package details in the corresponding section
        document.getElementById(`packageDetails${index}`).style.display = 'block';
        document.getElementById(`packageName${index}`).textContent = name;
        document.getElementById(`packagePrice${index}`).textContent = price.toFixed(2);
        document.getElementById(`packageOrder${index}`).textContent = order;
        document.getElementById(`packageDesc${index}`).textContent = desc;
    }
</script>


@endsection
