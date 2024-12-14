@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @if(auth()->user()->type == 'admin') 
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('adminProfile.users') }}" class="btn btn-success">
                            Add Admin
                        </a>
                    </div>
                @endif
            <div class="card">
                <div class="card-header">{{ __('Users List') }}</div>
                    <div class="card-body">
                        <!-- Check if there are users to display -->
                        @if($users->isEmpty())
                            <p>No users found.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->type }}</td>
                                            <td>
                                                <!-- Edit Button -->
                                                <!-- <a href="{{ route('adminProfile.edit', $user->id) }}" class="btn btn-primary">Edit</a> -->
                                                
                                                <!-- Delete Button Form -->
                                                <form action="{{ route('adminProfile.delete', $user->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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
