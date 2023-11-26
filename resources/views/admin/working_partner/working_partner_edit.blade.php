@extends('layouts.admin')
@section('content')

    <div class="row">
       <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Working Partner Edit</h4>
                @if (session('updated'))
                <div class="alert alert-success">{{session('updated')}}</div>
            @endif
            </div>
            <div class="card-body">
                <form action="{{route('working.partner.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label class="form-label">Partner Name</label>
                        <input type="text" name="name" class="form-control" value="{{$partner->name}}">
                        @error('name')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Partner Image</label>
                        <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="{{asset('uploads')}}/working_partner/{{$partner->image}}" class="mt-4" id="blah" alt="" width="200" />

                    </div>


                    <div class="mt-3 d-flex  justify-content-between">
                        <button type="submit" class="btn btn-primary">Update Partner</button>
                        <a href="{{route('working.partner')}}" class="text-white btn btn-success"><i class="fas fa-arrow-left"></i> Back to Partner</a>
                    </div>

                </form>
            </div>
        </div>
       </div>
    </div>
@endsection
