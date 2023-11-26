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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action </th>
                        </tr>
                        @foreach ($neighbors as $sl=> $neighbor )

                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$neighbor->name}}</td>
                            <td>{{$neighbor->address}}</td>
                            <td><a class="btn btn-{{$neighbor->status == 1?'success':'dark'}}" href="{{route('neighbor.apartment.status',$neighbor->id)}}">{{$neighbor->status == 1?'Show':'Hide'}}</a></td>
                            <td>

                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                    <a href="{{route('neighbor.apartment.edit',$neighbor->id)}}" class="text-decoration-none avtar avtar-xs btn-link-success btn-pc-default">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                </li>

                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                    <a href="{{route('neighbor.apartment.delete',$neighbor->id)}}" class=" text-decoration-none avtar avtar-xs btn-link-danger btn-pc-default">
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
                    <form action="{{route('neighbor.apartment.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
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
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img class="mt-4" id="blah" alt="" width="200" />

                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary">Add Apartment</button>
                        </div>

                    </form>
                </d
        </div>
    </div>
@endsection
