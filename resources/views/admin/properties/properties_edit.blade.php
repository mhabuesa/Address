@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card ">
                <div class="card-header">
                    <h4>Update Properties</h4>
                    @if (session('update'))
                        <div class="alert alert-success">{{session('update')}}</div>
                    @endif
                </div>
                <div class="card-body">
                <form action="{{route('properties.update', $properties->id)}}" method="post">
                    @csrf

                    <div class="">
                        <label class="form-label">Property Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title Write Here" value="{{$properties->title}}">
                        @error('title')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex  mt-4">

                            <div class="">
                                <label class="form-label">Property Price</label>
                                <input  type="text" name="price" class="form-control" placeholder="&#2547;" value="{{$properties->price}}">
                                @error('price')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>
                            <div style="margin-left: 10px;" class="">
                                <label class=" form-label">Property Place</label>
                                <select class="form-control" name="place" >
                                    <option value="">Select Place</option>
                                    @foreach ($places as $place )
                                    <option value="{{$place->id}}">{{$place->name}}</option>
                                    @endforeach

                                </select>
                                @error('place')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div style="margin-left: 10px;" class="">
                                <label class=" form-label">Working Partner</label>
                                <select class="form-control" name="partner" >
                                    <option value="">Select Partner</option>
                                    @foreach ($partners as $partner )
                                    <option value="{{$partner->id}}">{{$partner->name}}</option>
                                    @endforeach

                                </select>
                                @error('partner')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div style="margin-left: 10px;" class="">
                                <label class=" form-label">Position</label>
                                <select class="form-control" name="position" >
                                    <option  {{$properties->status == '1'?'selected':''}} value="1">Upcomming Project</option>
                                    <option {{$properties->status == '2'?'selected':''}} value="2">Under Construction</option>
                                    <option {{$properties->status == '3'?'selected':''}} value="3">Handover Project</option>


                                </select>
                                @error('partner')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-lg-12">

                            <div class=" col-lg-3">
                                <label class="form-label">Property Status</label>
                                <select class="form-control" name="status" >
                                    <option value="">Select Status</option>
                                    <option {{$properties->status == 'buy'?'selected':''}} value="bye">Bye</option>
                                    <option {{$properties->status == 'rent'?'selected':''}} value="rent">Rent</option>
                                </select>
                                @error('status')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-3">
                                <label class="form-label">Property Type</label>
                                <select class="form-control" name="type" >
                                    <option value="">Select Type</option>
                                    <option {{$properties->type == 'commercial'?'selected':''}} value="commercial">Commercial</option>
                                    <option {{$properties->type == 'residential'?'selected':''}} value="residential">Residential</option>
                                </select>
                                @error('type')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>




                            <div class=" col-lg-3">
                                <label class="form-label"><i class="fa-solid fa-location-dot"></i> Location</label>
                                <input type="address" name="location" class="form-control" placeholder="Location" value="{{$properties->location}}">
                                @error('location')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>



                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-12">

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Property Size</label>
                                <input type="number" name="size" class="form-control" placeholder="Size (Sft)" value="{{$properties->size}}">
                                @error('size')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Floor</label>
                                <select class="form-control" name="floor" >
                                    <option value="">Select Floor</option>
                                    <option {{$properties->floor == '1st'?'selected':''}} value="1st">1st</option>
                                    <option {{$properties->floor == '2nd'?'selected':''}} value="2nd">2nd</option>
                                    <option {{$properties->floor == '3rd'?'selected':''}} value="3rd">3rd</option>
                                    <option {{$properties->floor == '4th'?'selected':''}} value="4th">4th</option>
                                    <option {{$properties->floor == '5th'?'selected':''}} value="5th">5th</option>
                                    <option {{$properties->floor == '6th'?'selected':''}} value="6th">6th</option>
                                    <option {{$properties->floor == '7th'?'selected':''}} value="7th">7th</option>
                                    <option {{$properties->floor == '8th'?'selected':''}} value="8th">8th</option>
                                    <option {{$properties->floor == '9th'?'selected':''}} value="9th">9th</option>
                                    <option {{$properties->floor == '10th'?'selected':''}} value="10th">10th</option>
                                </select>
                                @error('floor')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Rooms</label>
                                <select class="form-control" name="room" >
                                    <option value="">Select Room</option>
                                    <option {{$properties->room == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->room == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->room == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->room == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->room == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->room == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->room == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->room == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->room == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->room == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('room')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>


                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Bedrooms</label>
                                <select class="form-control" name="bedroom" >
                                    <option value="">Select Bedrooms</option>
                                    <option {{$properties->bedroom == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->bedroom == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->bedroom == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->bedroom == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->bedroom == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->bedroom == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->bedroom == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->bedroom == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->bedroom == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->bedroom == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('bedroom')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>


                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Bathroom</label>
                                <select class="form-control" name="bath" >
                                    <option value="">Select Bath</option>
                                    <option {{$properties->bath == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->bath == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->bath == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->bath == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->bath == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->bath == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->bath == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->bath == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->bath == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->bath == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('bath')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>
                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Unit</label>
                                <select class="form-control" name="unit" >
                                    <option value="">Select Unit</option>
                                    <option {{$properties->unit == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->unit == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->unit == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->unit == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->unit == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->unit == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->unit == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->unit == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->unit == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->unit == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('unit')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Balconie</label>
                                <select class="form-control" name="balconie" >
                                    <option value="">Select Balconies</option>
                                    <option {{$properties->balconie == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->balconie == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->balconie == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->balconie == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->balconie == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->balconie == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->balconie == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->balconie == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->balconie == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->balconie == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('balconie')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>


                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Garages</label>
                                <select class="form-control" name="garage" >
                                    <option value="">Select Garages</option>
                                    <option value="0">0</option>
                                    <option {{$properties->garage == '1'?'selected':''}} value="1">1</option>
                                    <option {{$properties->garage == '2'?'selected':''}} value="2">2</option>
                                    <option {{$properties->garage == '3'?'selected':''}} value="3">3</option>
                                    <option {{$properties->garage == '4'?'selected':''}} value="4">4</option>
                                    <option {{$properties->garage == '5'?'selected':''}} value="5">5</option>
                                    <option {{$properties->garage == '6'?'selected':''}} value="6">6</option>
                                    <option {{$properties->garage == '7'?'selected':''}} value="7">7</option>
                                    <option {{$properties->garage == '8'?'selected':''}} value="8">8</option>
                                    <option {{$properties->garage == '9'?'selected':''}} value="9">9</option>
                                    <option {{$properties->garage == '10'?'selected':''}} value="10">10</option>
                                </select>
                                @error('garage')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Build Year</label>
                                <input type="date" name="date" class="form-control" placeholder="Size (Sft)" value="{{$properties->date}}">
                                @error('date')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="DiningSpace" name="dining"
                                    {{$properties->dining == 'dining'?'checked':''}}>
                                    <label class="form-check-label" for="DiningSpace"> Dining Space </label>
                                  </div>
                            </div>

                            <div class=" col-lg-2 mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="LivingRoom" name="living"
                                    {{$properties->living == 'living'?'checked':''}} >
                                    <label class="form-check-label" for="LivingRoom"> Living Room </label>
                                </div>
                            </div>


                        </div>
                    </div>






                    <div class="row mt-5">
                        <div class="col-lg-12">


                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Condition" name="air"
                                {{$properties->air == 'on'?'checked':''}}>
                                <label class="form-check-label" for="Condition"> Air-Condition Provision </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Emergency" name="emergency"
                                {{$properties->emergency == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Emergency"> Emergency Exit </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Parking" name="parking"
                                {{$properties->parking == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Parking"> Parking </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Cable" name="cable"
                                {{$properties->cable == 'on'?'checked':''}}>
                                <label class="form-check-label" for="Cable"> Cable TV Provision </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Fire" name="fire"
                                {{$properties->fire == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Fire"> Fire Extinguisher </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Tiled" name="tiled"
                                {{$properties->tiled == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Tiled"> Tiled Floor </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Electricity" name="electric"
                                {{$properties->electric == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Electricity"> Electricity Supply </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Lift" name="lift"
                                {{$properties->lift == 'on'?'checked':''}}>
                                    <label class="form-check-label" for="Lift"> Lift </label>

                            </div>
                        </div>
                    </div>












                    <div class="mt-5">
                        <label class="form-label">Property Description</label>
                        <textarea id="summernote" name="desp">{{$properties->desp}}</textarea>
                            @error('desp')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                    </div>



                    <div class="mt-5 col-lg-4 ">
                        <label class="form-label">Properties Video</label>
                        <input type="text" name="video" class="form-control" placeholder="Youtube Video Link Submit Here" value="{{$properties->video}}">
                        @error('video')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                    </div>


                    <div class="mt-5 col-lg-12 mb-5">
                        <div class="mt-5">
                            <button type="submit" class="btn btn-dark" type="submit">Update Properties Info</button>

                        </div>
                    </div>
                </form>









                {{-- Preview & Plan Update --}}
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h3>Preview & Plan Image Update</h3>
                        </div>
                        <div class="card-body">

                <form action="{{route('preview.update', $properties->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-5 col-lg-4">
                        <label class="form-label">Property Preview</label>
                        <input type="file" name="preview" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('preview')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="{{asset('uploads')}}/properties/preview/{{$properties->preview}}" class="mt-4" id="blah" alt="" width="200" />

                    </div>

                    <div class="mt-5 col-lg-4">
                        <label class="form-label">Floor Plans</label>
                        <input type="file" name="plan" class="form-control" onchange="document.getElementById('plan').src = window.URL.createObjectURL(this.files[0])">
                        @error('plan')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="{{asset('uploads')}}/properties/plan/{{$properties->plan}}" class="mt-4" id="plan" alt="" width="200" />

                    </div>

                    <div class="mt-5 col-lg-12 mb-5">
                        <div class="mt-5">
                            <button class="btn btn-info" type="submit">Update Preview & Plan Image</button>

                        </div>
                    </div>

                    </form>
                        </div>
                    </div>
                </div>






                {{-- Gallery Image Update --}}
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h3>Gallery Image Update</h3>
                        </div>
                        <div class="card-body">

                            @foreach ($gallery as $gallery )
                                <div class="col-lg-1 mt-5 text-center ">
                                    <img width="100" src="{{asset('uploads')}}/properties/gallery/{{$gallery->gallery}}" alt=""><br>
                                    <a class="btn btn-danger mt-2" href="{{route('gallery.delete', $gallery->id)}}">Delete</a>


                                </div>
                            @endforeach






                <form action="{{route('gallery.update', $properties->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mt-5 col-lg-12 mb-5">
                    <label class="form-label">Gallery</label>

                    <div class="upload__box">
                        <div class="upload__btn-box">
                          <label class="upload__btn">
                            <p>Upload images</p>
                            <input type="file" name="gallery[]" multiple="" data-max_length="20" class="upload__inputfile">
                          </label>
                        </div>
                        <div class="upload__img-wrap"></div>
                      </div>


                    @error('gallery')
                        <strong class="text-danger text-capitalize"> {{$message}}</strong>
                    @enderror
                </div>

                <div class="mt-5 col-lg-12 mb-5">
                    <div class="mt-5">
                        <button class="btn btn-success" type="submit">Update Gallery Image</button>

                    </div>
                </div>

                </form>

            </div>
        </div>
    </div>









                </div>
            </div>
        </div>
    </div>
@endsection
