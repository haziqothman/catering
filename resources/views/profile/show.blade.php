@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your Profile') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th>Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>

                        @if ($user->phone)
                        <tr>
                            <th>Phone:</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        @endif

                        @if ($user->address)
                        <tr>
                            <th>Address:</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        @endif
                      
                        @if ($user->city)
                        <tr>
                            <th>City:</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        @endif

                        @if ($user->company)
                        <tr>
                            <th>Company:</th>
                            <td>{{ $user->company }}</td>
                        </tr>
                        @endif

                        @if ($user->identification_card)
                        <tr>
                            <th>Identification Card:</th>
                            <td>{{ $user->identification_card }}</td>
                        </tr>
                        @endif

                        <tr>
                            <th>Joined At:</th>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                    </table>

                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                     </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
