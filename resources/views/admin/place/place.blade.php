@extends('layouts.admin')
@section('content')
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Place List</h4>
                    @if (session('deleted'))
                        <div class="alert alert-success">{{session('deleted')}}</div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>SL</th>
                            <th>Place Name</th>
                            <th>Image</th>
                            <th>Properties</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($places as $sl=> $place )
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$place->name}}</td>
                            <td>
                                <img src="{{asset('uploads')}}/place/{{$place->image}}" width="100" alt="">
                            </td>
                            <td>{{$place->count}}</td>
                            <td>
                               <a href="{{route('place.status', $place->id)}}" class="btn btn-{{$place->status == 0?'dark':'success'}}" href="">
                                {{$place->status == 0?'Hidden':'Show'}}</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('place.edit', $place->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('place.delete', $place->id)}}">Delete</a>
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
                    <h4>Add Place</h4>
                    @if (session('insert'))
                        <div class="alert alert-success">{{session('insert')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('place.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Place Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Place Image</label>
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            @error('image')
                                <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror

                            <img class="mt-4" id="blah" alt="" width="200" />

                        </div>

                        <div class="mt-3">
                            <button class="btn btn-primary">Add Place</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
