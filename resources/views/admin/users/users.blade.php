@extends('layouts.admin')
@section('content')
    <div class="row">
       <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>User List</h3>
                @if (session('delete'))
                    <div class="alert alert-success">{{session('delete')}}</div>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>

                    @foreach ($users as $sl=> $user )
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('user.edit',$user->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('user.delete',$user->id)}}">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
       </div>




       <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add User</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
            <div class="card-body">
               <form method="POST" action="{{ route('user.store') }}">
                @csrf

                <div class="mt-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <strong class="text-danger"> {{$message}}</strong>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
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
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @error('password_confirmation')
                        <strong class="text-danger"> {{$message}}</strong>
                    @enderror
                    @if (session('match'))
                        <strong class="text-danger">{{session('match')}}</strong>
                    @endif
                </div>

                <div class="mt-4">
                   <button class="btn btn-primary">Add User</button>
                </div>
               </form>
            </div>
        </div>
       </div>
    </div>
@endsection
