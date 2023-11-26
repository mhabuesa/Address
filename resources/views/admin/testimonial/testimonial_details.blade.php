@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonial Info</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('testimonial.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mt-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$testimonial->name}}">
                                @error('name')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{$testimonial->address}}">
                                @error('name')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror

                            </div>

                            <div class="mt-3">
                                <label class="form-label">Short Description</label>
                                <input type="text" name="desp" class="form-control" value="{{$testimonial->desp}}">
                                @error('desp')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" accept=".jpeg, .jpg, .png" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>

                                <img src="{{asset('uploads/testimonial/'.$testimonial->image)}}" id="blah" alt="" width="100"  />



                            </div>
                            <div class="mt-3">
                               <button type="submit" class="btn btn-primary">Update Testimonial</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
