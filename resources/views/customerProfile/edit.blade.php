@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customerProfile.update') }}" enctype="multipart/form-data">
                        @csrf
                        
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control" type="text" id="address" name="address" value="{{ old('address', $user->address) }}" required>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="postcode" class="form-label">Postcode</label>
                            <input class="form-control" type="number" id="postcode" name="postcode" value="{{ old('postcode', $user->postcode) }}" required>
                            @error('postcode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input class="form-control" type="text" id="city" name="city" value="{{ old('city', $user->city) }}" required>
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Optional company field -->
                        <div class="mb-3">
                            <label for="company" class="form-label">Company (Optional)</label>
                            <input class="form-control" type="text" id="company" name="company" value="{{ old('company', $user->company) }}">
                            @error('company')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="identification_card" class="form-label">Identification Card</label>
                            <input class="form-control" type="text" id="identification_card" name="identification_card" value="{{ old('identification_card', $user->identification_card) }}" required>
                            @error('identification_card')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input class="form-control" type="password" id="password" name="password">
                      </div>

                      <div class="mb-3">
                          <label for="confirm_password" class="form-label">Confirm Password</label>
                          <input class="form-control" type="password" id="confirm_password" name="confirm_password">
                      </div>

                      <div class="d-flex justify-content-center gap-2">
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                          <a href="{{ route('customerProfile.show') }}" class="btn btn-secondary">Cancel</a>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
