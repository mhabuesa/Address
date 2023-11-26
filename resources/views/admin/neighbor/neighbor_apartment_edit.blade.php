@extends('layouts.admin')
@section('content')

    <div class="row">

        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Apartment Update</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>

                <div class="card-body">
                    <form action="{{route('neighbor.apartment.update', $apartment->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text"  class="form-control" name="name" value="{{$apartment->name}}">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>

                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="text"  class="form-control" name="address" value="{{$apartment->address}}">
                            @error('address')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                        <strong class="text-danger text-capitalize"> {{$message}}</strong>
                    @enderror

                    <img width="150" src="{{asset('uploads')}}/neighbor/apartment/{{$apartment->image}}" class="mt-4" id="blah" alt="" width="200" />

                </div>
                <div class="col-lg-12">
                        <div class="mt-3">
                           <button type="submit" class="btn btn-primary">Update Info</button>
                        </div>
                </div>


                    </form>
                </div>
            </div>
        </div>
    </div>












@endsection
