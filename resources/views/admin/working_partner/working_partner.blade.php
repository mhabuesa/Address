@extends('layouts.admin')
@section('content')
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Working Partner List</h4>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($partners as $sl=> $partner )
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$partner->name}}</td>
                            <td>
                                <img src="{{asset('uploads')}}/working_partner/{{$partner->image}}" width="100" alt="">
                            </td>
                            <td>
                               <a href="{{route('working.partner.status', $partner->id)}}" class="btn btn-{{$partner->status == 0?'dark':'success'}}" href="">
                                {{$partner->status == 0?'Hidden':'Show'}}</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('working.partner.edit', $partner->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('working.partner.delete', $partner->id)}}">Delete</a>
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
                    <h4>Add Working Partner</h4>
                    @if (session('insert'))
                        <div class="alert alert-success">{{session('insert')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('working.partner.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Partner Name</label>
                            <input type="text" name="name" class="form-control">
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

                            <img class="mt-4" id="blah" alt="" width="200" />

                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Add Partner</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
