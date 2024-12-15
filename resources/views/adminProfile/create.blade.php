@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <!-- Back Button -->
            <a href="{{ route('adminProfile.users.index') }}" class="btn btn-secondary back-button">
                <i class="fa fa-chevron-circle-left"></i> 
            </a>
            <div class="card">      
                <div class="card-header">{{ __('Create Admin') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adminProfile.store') }}">
                        @csrf

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name." required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address." required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password." required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Your Password." required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address." required>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number." required>
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City." required>
                        </div>

                        <!-- Postcode -->
                        <div class="mb-3">
                            <label for="postcode" class="form-label">Postcode</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Your Postcode." required>
                        </div>

                        <!-- Identification Card -->
                        <div class="mb-3">
                            <label for="identification_card" class="form-label">Identification Card</label>
                            <input type="text" class="form-control" id="identification_card" name="identification_card" placeholder="Enter Your Identification Card." required>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Admin</button>
                        </div>

                        <!-- Validation Errors -->
                        @if($errors->any())
                          <div class="alert alert-danger mt-3">
                              <ul>
                                  @foreach($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .back-button {
        margin-bottom: 20px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
</style>
@endsection
