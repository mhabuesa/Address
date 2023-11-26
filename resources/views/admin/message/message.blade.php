@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Message</h3>
                    @if (session('delete'))
                        <div class="alert alert-success">{{session('delete')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($messages as $key=> $message )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$message->name}}</td>
                            <td>
                                <a class="btn btn-{{$message->status == 0?'dark':'info'}}" href="{{route('message.read',$message->id)}}">{{$message->status == 0?'Unseen':'Seen'}}</a>
                                <a class="btn btn-danger" href="{{route('message.delete',$message->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
