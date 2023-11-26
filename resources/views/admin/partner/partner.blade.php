@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Partnr List</h3>
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
                            <th>Action </th>
                        </tr>
                        @foreach ($partners as $sl=> $partner )

                        <tr>
                            <td>{{$sl+1}}</td>
                            <td><img width="50" src="{{asset('uploads')}}/partner/{{$partner->image}}" alt=""></td>
                            <td>{{$partner->name}}</td>
                            <td><a class="btn btn-{{$partner->status == 1?'success':'dark'}}" href="{{route('partner.status',$partner->id)}}">{{$partner->status == 1?'Show':'Hide'}}</a></td>
                            <td>

                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                    <a href="{{route('partner.details', $partner->id)}}" class="text-decoration-none avtar avtar-xs btn-link-success btn-pc-default">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                </li>

                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                    <a href="{{route('partner.delete', $partner->id)}}" class=" text-decoration-none avtar avtar-xs btn-link-danger btn-pc-default">
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
                    <h4>Add Partner</h4>
                    @if (session('insert'))
                        <div class="alert alert-success">{{session('insert')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control">
                            @error('phone')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Building</label>
                            <input type="text" name="building" class="form-control">
                            @error('building')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                            @error('address')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Video Link</label>
                            <input type="text" name="video" class="form-control">
                            @error('video')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>


                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img class="mt-4" id="blah" alt="" width="200" />

                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary">Add Partner</button>
                        </div>

                    </form>
                </d
        </div>
    </div>
@endsection


{{-- <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal" data-bs-target="#customer-modal">
      <i class="ti ti-eye f-18"></i>
    </a>
  </li>
  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit">
    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal" data-bs-target="#customer-edit_add-modal">
      <i class="ti ti-edit-circle f-18"></i>
    </a>
  </li>
  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
      <i class="ti ti-trash f-18"></i>
    </a>
  </li> --}}
