<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    function add_upcoming(){
        $places = Place::all();
        return view('admin.upcoming.add_upcoming', [
            'places'=>$places,
        ]);
    }





    function upcoming_store(Request $request){

        $request->validate([

            'title'=>'required',
            'price'=>'required',
            'status'=>'required',
            'type'=>'required',
            'place'=>'required',
            'location'=>'required',
            'size'=>'required',
            'floor'=>'required',
            'room'=>'required',
            'bedroom'=>'required',
            'a_bath'=>'required',
            'c_bath'=>'required',
            'balconie'=>'required',
            'garage'=>'required',
            'date'=>'required',
            'desp'=>'required',
            'preview'=>'required|Image',
            'plan'=>'required',
            'video'=>'required',
            // 'gallery'=>'required',
        ]);

        $place_id = $request->place;
        $place = Place::find($place_id)->name;
        $place_name = str_replace(' ', '-', $place);

        $image_preview = $request->preview;
        $extension_preview = $image_preview->extension();
        $preview ='place'.'-'.$place_name.'-'.random_int(1111, 9999).'.'.$extension_preview;

        Image::make($image_preview)->resize(1000, 750)->save(public_path('uploads/properties/preview/'.$preview));




        $image_plan = $request->plan;
        $extension_plan = $image_plan->extension();
        $plan ='plan'.'-'.$place_name.'-'.random_int(1111, 9999).'.'.$extension_plan;

        Image::make($image_plan)->resize(770, 483)->save(public_path('uploads/properties/plan/'.$plan));


        $letter = chr(rand(65,90));
        $property_id = $letter.random_int(11111,99999) ;


        $explode = explode('&',$request->video);
        $video = $explode[0];




        $properties_id = properties::insertGetId([
            'title'=>$request->title,
            'price'=>$request->price,
            'status'=>$request->status,
            'type'=>$request->type,
            'place'=>$request->place,
            'location'=>$request->location,
            'size'=>$request->size,
            'floor'=>$request->floor,
            'room'=>$request->room,
            'bedroom'=>$request->bedroom,
            'a_bath'=>$request->a_bath,
            'c_bath'=>$request->c_bath,
            'balconie'=>$request->balconie,
            'garage'=>$request->garage,
            'date'=>$request->date,
            'dining'=>$request->dining,
            'living'=>$request->living,
            'air'=>$request->air,
            'emergency'=>$request->emergency,
            'parking'=>$request->parking,
            'cable'=>$request->cable,
            'fire'=>$request->fire,
            'tiled'=>$request->tiled,
            'electric'=>$request->electric,
            'lift'=>$request->lift,
            'desp'=>$request->desp,
            'preview'=>$preview,
            'plan'=>$plan,
            'video'=>$video,
            'property_id'=>$property_id,
            'created_at'=>Carbon::now(),
        ]);

        $place_id = $request->place;
        $place_count = Place::find($place_id)->count;
        $after_sum = $place_count+1;
        Place::find($place_id)->update([
            'count'=>$after_sum,
        ]);

        $gallery = $request->gallery;

        foreach($gallery as $gallery){


        $extension_gallery = $gallery->extension();
        $gallery_file_name ='gallery'.'-'.$place_name.'-'.random_int(1111, 9999).'.'.$extension_gallery;

        Image::make($gallery)->resize(760, 510)->save(public_path('uploads/properties/gallery/'.$gallery_file_name));

        Gallery::insert([
            'gallery'=>$gallery_file_name,
            'properties_id'=>$properties_id,
            'created_at'=>Carbon::now(),
        ]);


        }



        return back()->with('success', 'Properties Successfully Added');


    }
}
