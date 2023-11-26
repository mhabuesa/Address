@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Agents List</h3>
                    @if (session('deleted'))
                        <div class="alert alert-success">{{session('deleted')}}</div>
                    @endif


                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($agents as $sl=> $agent )
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$agent->name}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('agent.details', $agent->id)}}">Details</a>
                                    <a class="btn btn-danger" href="{{route('agent.delete',$agent->id)}}">Delete</a>
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
                    <h3>Add Agents</h3>
                    @if (session('added'))
                        <div class="alert alert-success">{{session('added')}}</div>
                    @endif
                </div>
                <div class="card-body">

                    <form action="{{route('agent.update',$agent->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">

                        </div>

                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                            @error('address')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control">
                            @error('phone')
                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Facebook</label>
                            <input type="text" name="facebook" class="form-control">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Twitter</label>
                            <input type="text" name="twitter" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Instagram</label>
                            <input type="text" name="instagram" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" name="linkedin" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" accept=".jpeg, .jpg, .png" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"><br>

                            <img src="" id="blah" alt="" width="100"  />



                        </div>
                        <div class="mt-3">
                           <button type="submit" class="btn btn-primary">Add Agent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
