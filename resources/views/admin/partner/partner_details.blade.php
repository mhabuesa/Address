@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-3 float-right ">
            <div class="card">
              <div class="card-body position-relative">
                <div class="text-center mt-3">
                  <div class="chat-avtar">
                    <img class="rounded-circle img-fluid wid-60" src="{{asset('uploads')}}/partner/{{$partner->image}}" alt="User image">
                  </div>
                  <h4 class="mb-0">{{$partner->name}}</h4>

                  <hr class="my-3 border border-secondary-subtle">

                  <div class=" bg bg-primary text-light rounded  mb-3">
                    <p class="mb-0"> <i class="ti ti-phone"></i> {{$partner->phone}}</p>
                  </div>

                  <div class="bg bg-secondary text-light rounded  mb-3">
                    <p class="mb-0"> <i class="ti ti-mail"></i> {{$partner->email}}</p>
                  </div>

                  <div class="bg bg-success text-light rounded  mb-3">
                    <p class="mb-0"> <i class="ti ti-building"></i> {{$partner->building}}</p>
                  </div>


                  <div class="bg bg-info text-light rounded mb-3">
                    <p class="mb-0"> <i class="ti ti-map-pin "></i>{{$partner->address}}</p>
                  </div>

                  <div class="bg bg-danger rounded  ">
                    <a target="_blank" href="{{$partner->video}}" class="text-light">
                      <p class="mb-0"> <i class="ti ti-video"></i> Click Here to Video</p>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>



        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Partner Update</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>

                <div class="card-body">
                    <form action="{{route('partner.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text"  class="form-control" name="name" value="{{$partner->name}}">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Phone</label>
                            <input type="text"  class="form-control" name="phone" value="{{$partner->phone}}">
                            @error('phone')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="text"  class="form-control" name="email" value="{{$partner->email}}">
                            @error('email')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Building</label>
                            <input type="text"  class="form-control" name="building" value="{{$partner->building}}">
                            @error('building')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="text"  class="form-control" name="address" value="{{$partner->address}}">
                            @error('address')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="mt-3">
                            <label class="form-label">Video</label><br>
                            <input type="text"  class="form-control" name="video" value="{{$partner->video}}">
                            @error('video')
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

                    <img width="150" src="{{asset('uploads')}}/partner/{{$partner->image}}" class="mt-4" id="blah" alt="" width="200" />

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
