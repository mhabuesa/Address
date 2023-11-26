@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Send SMS</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('sms.delivered')}}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label">SMS Field</label>
                            <textarea name="sms" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Send SMS</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
