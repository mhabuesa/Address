@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card ">
                <div class="card-header">
                    <h4>Add Properties</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                </div>
                <div class="card-body">
                <form action="{{route('properties.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="">
                        <label class="form-label">Property Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title Write Here">
                        @error('title')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex  mt-4">

                            <div class="">
                                <label class="form-label">Property Price</label>
                                <input  type="text" name="price" class="form-control" placeholder="&#2547;">
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
                                    <option value="1">Upcomming Project</option>
                                    <option value="2">Under Construction</option>
                                    <option value="3">Handover Project</option>


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
                                    <option value="buy">Buy</option>
                                    <option value="rent">Rent</option>
                                </select>
                                @error('status')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-3">
                                <label class="form-label">Property Type</label>
                                <select class="form-control" name="type" >
                                    <option value="">Select Type</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="residential">Residential</option>
                                </select>
                                @error('type')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>



                            <div class=" col-lg-3">
                                <label class="form-label"><i class="fa-solid fa-location-dot"></i> Location</label>
                                <input type="address" name="location" class="form-control" placeholder="Location">
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
                                <input type="number" name="size" class="form-control" placeholder="Size (Sft)">
                                @error('size')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Floor</label>
                                <select class="form-control" name="floor" >
                                    <option value="">Select Floor</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                    <option value="9th">9th</option>
                                    <option value="10th">10th</option>
                                </select>
                                @error('floor')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Rooms</label>
                                <select class="form-control" name="room" >
                                    <option value="">Select Room</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                @error('room')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>


                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Bedrooms</label>
                                <select class="form-control" name="bedroom" >
                                    <option value="">Select Bedrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                @error('bedroom')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>


                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Bathroom</label>
                                <select class="form-control" name="bath" >
                                    <option value="">Select Bath</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                @error('bath')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>
                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Unit</label>
                                <select class="form-control" name="unit" >
                                    <option value="">Select Unit</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                @error('unit')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Balconie</label>
                                <select class="form-control" name="balconie" >
                                    <option value="">Select Balconies</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                @error('garage')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-3">
                                <label class="form-label">Build Year</label>
                                <input type="date" name="date" class="form-control" placeholder="Size (Sft)">
                                @error('date')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                @enderror
                            </div>

                            <div class=" col-lg-2 mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="DiningSpace" name="dining" >
                                    <label class="form-check-label" for="DiningSpace"> Dining Space </label>
                                  </div>
                            </div>

                            <div class=" col-lg-2 mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="LivingRoom" name="living" >
                                    <label class="form-check-label" for="LivingRoom"> Living Room </label>
                                </div>
                            </div>


                        </div>
                    </div>






                    <div class="row mt-5">
                        <div class="col-lg-12">


                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Condition" name="air">
                                <label class="form-check-label" for="Condition"> Air-Condition Provision </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Emergency" name="emergency">
                                    <label class="form-check-label" for="Emergency"> Emergency Exit </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Parking" name="parking">
                                    <label class="form-check-label" for="Parking"> Parking </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Cable" name="cable">
                                <label class="form-check-label" for="Cable"> Cable TV Provision </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Fire" name="fire">
                                    <label class="form-check-label" for="Fire"> Fire Extinguisher </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Tiled" name="tiled">
                                    <label class="form-check-label" for="Tiled"> Tiled Floor </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Electricity" name="electric">
                                    <label class="form-check-label" for="Electricity"> Electricity Supply </label>

                            </div>

                            <div class=" col-lg-2 mt-3">
                                <input class="form-check-input" type="checkbox" id="Lift" name="lift">
                                    <label class="form-check-label" for="Lift"> Lift </label>

                            </div>
                        </div>
                    </div>












                    <div class="mt-5">
                        <label class="form-label">Property Description</label>
                        <textarea id="summernote"  class="form-control" name="desp" ></textarea>
                            @error('desp')
                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                            @enderror
                    </div>


                    <div class="mt-5 col-lg-4">
                        <label class="form-label">Preview Image</label>
                        <input type="file" name="preview" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        @error('preview')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="" class="mt-4" id="blah" alt="" width="200" />

                    </div>

                    <div class="mt-5 col-lg-4">
                        <label class="form-label">Floor Plans</label>
                        <input type="file" name="plan" class="form-control" onchange="document.getElementById('plan').src = window.URL.createObjectURL(this.files[0])">
                        @error('plan')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                        <img src="" class="mt-4" id="plan" alt="" width="200" />

                    </div>



                    <div class="mt-5 col-lg-4 ">
                        <label class="form-label">Properties Video</label>
                        <input type="text" name="video" class="form-control" placeholder="Youtube Video Link Submit Here">
                        @error('video')
                            <strong class="text-danger text-capitalize"> {{$message}}</strong>
                        @enderror

                    </div>

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
                            <button class="btn btn-primary" type="submit">Add Properties</button>

                        </div>
                    </div>
                </form>







                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer_script')

    <script>
        $(document).ready(function() {
        $('#summernote').summernote();
        });
    </script>
@endsection
