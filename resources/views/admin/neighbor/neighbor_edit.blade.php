@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Neighbor Edit</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('neighbor.person.update',$neighbor->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$neighbor->name}}">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Apartment</label>
                            <select class="form-control" name="apartment" id="">
                                @foreach ($apartments as $apartment )
                                <option {{$apartment->id == $neighbor->apartment_id?'selected':''}} value="{{$apartment->id}}">{{$apartment->name}}</option>
                                @endforeach
                            </select>

                            @error('apartment')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Flat Number</label>
                            <input type="text" name="flat" class="form-control" value="{{$neighbor->flat}}">
                            @error('flat')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{$neighbor->email}}">
                            @error('email')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img src="{{asset('uploads')}}/neighbor/person/{{$neighbor->image}}" class="mt-4" id="blah" alt="" width="200" />

                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mt-3">
                                <button class="btn btn-primary">Add Neighbor</button>
                            </div>
                            <div class="mt-3">
                                <a href="{{route('neighbor.person')}}"  class="text-white btn btn-success"> <i class="fas fa-arrow-left"></i> Back to Neighbor</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
