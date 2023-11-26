@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card ">
                <div class="card-header">
                    <h4>Add Properties</h4>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">

                    <form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="">
                        <label class="form-label">Blog Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title Write Here" value="{{$blog->title}}">
                        @error('title')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <label class="form-label">Blog Description</label>
                        <textarea id="summernote" name="desp">{{$blog->desp}}</textarea>
                            @error('desp')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                    </div>

                    <div class="mt-5">
                        <label class="form-label">Blog Image</label>
                        <input type="file" accept=".jpg, .jpeg, .png" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="{{asset('uploads/blog/'.$blog->image)}}" class="mt-4" id="blah" alt="" width="200" />

                    </div>


                    <div class="mt-5">
                       <button type="submit" class="btn btn-primary">Add Blog</button>
                    </div>

                    </form>







                </div>
            </div>
        </div>
    </div>
@endsection
