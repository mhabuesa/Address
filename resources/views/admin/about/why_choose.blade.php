@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Hwy Choose Us</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('why.choose.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class=" col-lg-6 mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Title 1</label>
                                    <input type="text" name="title1"  class="form-control" value="{{$why_choose->title1}}">

                                    @error('title1')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">Description 1</label>
                                    <textarea class="form-control" name="desp1" cols="30" rows="10">{{$why_choose->desp1}}</textarea>
                                    @error('desp1')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                    @enderror
                                </div>

                            </div>

                            <div class=" col-lg-6 mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Title 2</label>
                                    <input type="text" name="title2"  class="form-control" value="{{$why_choose->title2}}">

                                    @error('title2')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">Description 2</label>
                                    <textarea class="form-control" name="desp2" cols="30" rows="10">{{$why_choose->desp2}}</textarea>
                                    @error('desp2')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                    @enderror
                                </div>

                            </div>

                            <div class=" col-lg-6 m-auto mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Title 3</label>
                                    <input type="text" name="title3"  class="form-control" value="{{$why_choose->title3}}">

                                    @error('title3')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">Description 3</label>
                                    <textarea class="form-control" name="desp3" cols="30" rows="10">{{$why_choose->desp3}}</textarea>
                                    @error('desp3')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                    @enderror
                                </div>

                            </div>
                        </div>






                            <div class=" mt-5">
                               <button type="submit" class="btn btn-primary">Update About</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
