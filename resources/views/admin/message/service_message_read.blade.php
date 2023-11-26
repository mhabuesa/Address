@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Message Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message </th>
                        </tr>

                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->phone}}</td>
                            <td>{{$message->email}}</td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="5">{{$message->message}}</textarea>
                            </td>
                        </tr>

                    </table>
                    <div class="mt-4">
                        <a class="btn btn-primary" href="{{route('service.message')}}">Back to Message Bos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
