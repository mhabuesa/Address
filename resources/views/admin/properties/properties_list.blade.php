@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Properties List</h4>
                    @if (session('deleted'))
                        <div class="alert alert-success">{{session('deleted')}}</div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Place</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>On/Off</th>

                            <th>Action</th>
                        </tr>
                        @foreach ($properties as $key=> $property )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{App\Models\Place::where('id', $property->place)->get()->first()->name }}</td>
                            <td><button class="text-capitalize btn btn-{{$property->status=='rent'?'success':'dark'}}">{{$property->status}}</button></td>
                            <td>{{$property->price}}</td>

                            <td><a class="btn btn-{{$property->on_off == 1?'info':'dark'}}" href="{{route('property.status',$property->id)}}">{{$property->on_off == 1?'On':'Off'}}</a></td>



                            <td>
                                <a class="btn btn-success" href="{{route('property.edit', $property->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('property.delete', $property->id)}}">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
