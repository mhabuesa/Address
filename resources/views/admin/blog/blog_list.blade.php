@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Blog List</h3>
                    @if (session('delete'))
                        <div class="alert alert-success">{{session('delete')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($blogs as $sl=> $blog )
                            <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$blog->title}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('blog.details',$blog->id)}}" >Details</a>
                                    <a class="btn btn-danger" href="{{route('blog.delete',$blog->id)}}" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
