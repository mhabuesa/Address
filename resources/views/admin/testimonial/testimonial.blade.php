@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Agents List</h3>
                    @if (session('deleted'))
                        <div class="alert alert-success">{{session('deleted')}}</div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif


                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($testimonials as $sl=> $testimonial )
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$testimonial->name}}</td>

                                <td>
                                    <a class="btn btn-{{$testimonial->status == 0?'dark':'success'}}" href="{{route('testimonial.status', $testimonial->id)}}">{{$testimonial->status == 0?'Hide':'Show'}}</a>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{route('testimonial.details', $testimonial->id)}}">Details</a>
                                    <a class="btn btn-danger" href="{{route('testimonial.delete',$testimonial->id)}}">Delete</a>
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
                    <h3>Add Agents</h3>
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                </div>
                <div class="card-body">

                    <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror

                        </div>

                        <div class="mt-3">
                            <label class="form-label">Short Description</label>
                            <input type="text" name="desp" class="form-control">
                            @error('desp')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" accept=".jpeg, .jpg, .png" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>

                            <img src="" id="blah" alt="" width="100"  />



                        </div>
                        <div class="mt-3">
                           <button type="submit" class="btn btn-primary">Add Testimonial</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
