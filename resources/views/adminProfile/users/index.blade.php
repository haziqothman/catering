@extends('layouts.navigation')

@section('content')
<div class="container-fluid"> 
    <div class="row justify-content-center">
        <div class="col-12 mt-5"> 
            @if(auth()->user()->type == 'admin') 
                <div class="d-flex justify-content-between mb-5">
                    <a href="{{ route('adminProfile.show') }}" class="btn btn-secondary">
                        <i class="fa fa-chevron-circle-left"></i> 
                    </a>
                    <a href="{{ route('adminProfile.create') }}" class="btn btn-primary">
                         <i class="fas fa-plus"></i> Add New Admin
                    </a>
                </div>
            @endif 
            <div class="card">
                <div class="card-header">{{ __('All Users List') }}</div>
                    <div class="card-body table-responsive"> 
                        @if($users->isEmpty())
                            <p>No users found.</p>
                        @else
                            <table class="table table-bordered table-striped"> 
                                <thead class="table-dark"> 
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Postcode</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Identification Card</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->postcode }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->identification_card }}</td>
                                            <td>{{ $user->type }}</td>
                                            <td>
                                                <!-- Edit Button -->
                                                <a href="{{ route('adminProfile.users.editUser', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                
                                                <!-- Delete Button Form -->
                                                <form action="{{ route('adminProfile.delete', $user->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
