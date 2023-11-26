@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Conract Info</h3>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('contact.update')}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">Address</label>
                            <input type="address" name="address" class="form-control" value="{{$contact->address}}">
                            @error('address')
                                <strong class="text-calitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone Number</label>
                            <input type="phone" name="phone" class="form-control" value="{{$contact->phone}}">
                            @error('phone')
                                <strong class="text-calitalize">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                            @error('email')
                                <strong class="text-calitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Facebook ID</label>
                            <input type="text" name="facebook" class="form-control" value="{{$contact->facebook}}">
                            @error('facebook')
                                <strong class="text-calitalize">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Twitter ID</label>
                            <input type="text" name="twitter" class="form-control" value="{{$contact->twitter}}">

                        </div>

                        <div class="mt-3">
                            <label class="form-label">Youtube Channel</label>
                            <input type="text" name="youtube" class="form-control" value="{{$contact->youtube}}">

                        </div>

                        <div class="mt-5">
                            <button class="btn btn-primary">Update Info</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
