@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>User Update</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update',$user->id) }}">
                        @csrf

                        <div class="mt-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            @error('name')
                                <strong class="text-danger"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            @error('email')
                                <strong class="text-danger"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('password')
                                <strong class="text-danger"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-4">
                           <button class="btn btn-primary">Update User</button>
                        </div>
                       </form>
                </div>
            </div>
        </div>
    </div>
@endsection
