@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Agent Info</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('agent.update',$agent->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mt-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$agent->name}}">
                                @error('name')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{$agent->title}}">

                            </div>

                            <div class="mt-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{$agent->address}}">
                                @error('address')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$agent->phone}}">
                                @error('phone')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$agent->email}}">
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{$agent->facebook}}">
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{$agent->twitter}}">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{$agent->instagram}}">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">LinkedIn</label>
                                <input type="text" name="linkedin" class="form-control" value="{{$agent->linkedin}}">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" accept=".jpeg, .jpg, .png" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>

                                <img src="{{asset('uploads/agent/'.$agent->image)}}" id="blah" alt="" width="100"  />

                                @error('image')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror

                            </div>
                            <div class="mt-3">
                               <button type="submit" class="btn btn-primary">Add Agent</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
