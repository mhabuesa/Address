@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Banner Image</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('banner.update')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="mt-3">
                            <label class="form-label">Banner Image</label>
                            <input type="file" accept=".jpg, .png, .jpeg" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" >
                            @error('image')
                                <strong class="text-calitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Image</label><br>
                            <img src="{{asset('uploads')}}/about/banner/{{$banner->image}}" alt="" id="blah" width="200">
                        </div>

                        <div class="mt-5">
                            <button class="btn btn-primary">Update Info</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
