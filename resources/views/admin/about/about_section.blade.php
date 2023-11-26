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
                    <form action="{{route('about.section.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3">
                            <label class="form-label">Description</label>
                            <textarea id="summernote" class="form-control" name="desp">{{$about_section->desp}}</textarea>
                                @error('desp')
                                        <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                        </div>




                            <div class="mt-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" accept=".jpeg, .jpg, .png" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>
                                <img width="150" src="{{asset('uploads')}}/about/cover/{{$about_section->image}}" id="blah" alt="" width="100"  />
                                @error('image')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Video</label>
                                <input type="text" name="video" class="form-control"  value="{{$about_section->video}}">
                                @error('video')
                                    <strong class="text-danger text-capitalize">{{$message}}</strong>
                                @enderror

                            </div>

                            <div class="mt-5">
                               <button type="submit" class="btn btn-primary">Update About</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('footer_script')

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection
