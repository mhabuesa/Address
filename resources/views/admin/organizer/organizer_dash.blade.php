@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Organizer List</h3>
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-success">{{session('delete')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($organizers as $sl=> $organizer )
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td><img width="50" src="{{asset('uploads')}}/organizer/{{$organizer->image}}" alt=""></td>
                                <td>{{$organizer->name}}</td>
                                <td><a class="btn btn-{{$organizer->status == 1?'success':'dark'}}" href="{{route('organizer.status',$organizer->id)}}">{{$organizer->status == 1?'Show':'Hide'}}</a></td>
                                <td>
                                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                        <a href="{{route('organizer.edit',$organizer->id)}}" class="text-decoration-none avtar avtar-xs btn-link-success btn-pc-default">
                                          <i class="ti ti-eye f-18"></i>
                                        </a>
                                    </li>

                                      <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                        <a href="{{route('organizer.delete',$organizer->id)}}" class=" text-decoration-none avtar avtar-xs btn-link-danger btn-pc-default">
                                          <i class="ti ti-trash f-18"></i>
                                        </a>
                                      </li>
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
                    <h3>Add Organizer</h3>
                    @if (session('insert'))
                        <div class="alert alert-success">{{session('insert')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('organizer.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" required>
                            @error('phone')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                            @error('email')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="address" class="form-control" name="address" required>
                            @error('address')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Video</label>
                            <input type="text" class="form-control" name="video" required>
                            @error('video')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required>
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img class="mt-4" id="blah" alt="" width="200" />

                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" type="submit"> Add Organizer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
