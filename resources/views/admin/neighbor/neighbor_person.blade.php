@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Neighbor List</h3>
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
                        @foreach ($neighbors as $sl=> $neighbor )

                        <tr>
                            <th>{{$sl+1}}</th>
                            <td><img width="50" src="{{asset('uploads')}}/neighbor/person/{{$neighbor->image}}" alt=""></td>
                            <td>{{$neighbor->name}}</td>
                            <td><a class="btn btn-{{$neighbor->status == 1?'success':'dark'}}" href="{{route('neighbor.status',$neighbor->id)}}">{{$neighbor->status == 1?'Show':'Hide'}}</a></td>
                            <td>

                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                    <a href="{{route('neighbor.edit',$neighbor->id)}}" class="text-decoration-none avtar avtar-xs btn-link-success btn-pc-default">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                </li>

                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                    <a href="{{route('neighbor.delete',$neighbor->id)}}" class=" text-decoration-none avtar avtar-xs btn-link-danger btn-pc-default">
                                      <i class="ti ti-trash f-18"></i>
                                    </a>
                                  </li>

                            </td>



                            <th>

                            </th>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Neighbor</h3>
                    @if (session('insert'))
                        <div class="alert alert-success">{{session('insert')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('neighbor.person.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Apartment</label>
                            <select class="form-control" name="apartment" id="">
                                @foreach ($apartments as $apartment )
                                <option value="{{$apartment->id}}">{{$apartment->name}}</option>
                                @endforeach
                            </select>

                            @error('apartment')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Flat Number</label>
                            <input type="text" name="flat" class="form-control">
                            @error('flat')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control">

                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">

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
                            <button class="btn btn-primary">Add Neighbor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
