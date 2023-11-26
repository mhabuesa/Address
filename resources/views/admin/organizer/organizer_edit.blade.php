@extends('layouts.admin')
@section('content')
    <div class="row">

        <div class="col-lg-4 m-auto">

            <div class="card">
                <div class="card-header">
                    <h3>Update Organizer</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('organizer.update',$organizer->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{$organizer->name}}" required>
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Phone *</label>
                            <input type="text" class="form-control" name="phone" value="{{$organizer->phone}}" required>
                            @error('phone')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$organizer->email}}">
                            @error('email')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Address *</label>
                            <input type="address" class="form-control" name="address" value="{{$organizer->address}}" required>
                            @error('address')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Video *</label>
                            <input type="text" class="form-control" name="video" value="{{$organizer->video}}" required>
                            @error('video')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img width="150" src="{{asset('uploads')}}/organizer/{{$organizer->image}}" class="mt-4" id="blah" alt="" width="200" />

                        </div>
                        <div class="mt-5 d-flex justify-content-between">
                            <button class="btn btn-primary" type="submit"> Add Organizer</button>
                            <a href="{{route('organizer.dash')}}" class="btn btn-success" type="submit"> <i class="fas fa-arrow-left"></i> Add Organizer</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
