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
                    <form action="{{route('counter.up.update')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class=" col-lg-6 mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Title 1</label>
                                    <input type="text" name="title1"  class="form-control" value="{{$counter_up->title1}}">

                                    @error('title1')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Number 1</label>
                                    <input type="text" name="number1"  class="form-control" value="{{$counter_up->number1}}">

                                    @error('number1')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>



                            </div>

                            <div class=" col-lg-6 mt-5">

                                <div class="mt-3">
                                    <label class="form-label">Title 2</label>
                                    <input type="text" name="title2"  class="form-control" value="{{$counter_up->title2}}">

                                    @error('title2')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Number 2</label>
                                    <input type="text" name="number2"  class="form-control" value="{{$counter_up->number2}}">

                                    @error('number2')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>



                            </div>

                            <div class=" col-lg-6 m-auto mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Title 3</label>
                                    <input type="text" name="title3"  class="form-control" value="{{$counter_up->title3}}">

                                    @error('title3')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">number 3</label>
                                    <input type="text" name="number3"  class="form-control" value="{{$counter_up->number3}}">

                                    @error('number3')
                                        <strong class="text-danger text-capitalize">{{$message}}</strong>
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
