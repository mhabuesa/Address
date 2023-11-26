<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Place;
use App\Models\properties;
use App\Models\WorkingPartner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PropertiesController extends Controller
{
    function add_properties(){
        $partners = WorkingPartner::all();
        $places = Place::all();
        return view('admin.properties.add_properties', [
            'places'=>$places,
            'partners'=>$partners,
        ]);
    }


    function properties_store(Request $request){

        $request->validate([

            'title'=>'required',
            'price'=>'required',
            'place'=>'required',
            'partner'=>'required',
            'position'=>'required',
            'status'=>'required',
            'type'=>'required',
            'place'=>'required',
            'location'=>'required',
            'size'=>'required',
            'floor'=>'required',
            'room'=>'required',
            'bedroom'=>'required',
            'bath'=>'required',
            'unit'=>'required',
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
            'partner'=>$request->partner,
            'position'=>$request->position,
            'location'=>$request->location,
            'size'=>$request->size,
            'floor'=>$request->floor,
            'room'=>$request->room,
            'bedroom'=>$request->bedroom,
            'bath'=>$request->bath,
            'unit'=>$request->unit,
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

    function properties_list(){
        $properties = properties::all();
        return view('admin.properties.properties_list', [
            'properties'=>$properties,
        ]);
    }

    function property_edit(Request $request, $id){
        $partners = WorkingPartner::all();
        $places = Place::all();
        $properties = properties::find($id);
        $gallery = Gallery::where('properties_id', $id)->get();
        return view('admin.properties.properties_edit', [
            'places'=>$places,
            'properties'=>$properties,
            'gallery'=>$gallery,
            'partners'=>$partners,
        ]);
    }

    function property_update(Request $request, $id){

        $explode = explode('&',$request->video);
        $video = $explode[0];


        $request->validate([

            'title'=>'required',
            'price'=>'required',
            'place'=>'required',
            'partner'=>'required',
            'position'=>'required',
            'status'=>'required',
            'type'=>'required',
            'place'=>'required',
            'location'=>'required',
            'size'=>'required',
            'floor'=>'required',
            'room'=>'required',
            'bedroom'=>'required',
            'bath'=>'required',
            'unit'=>'required',
            'balconie'=>'required',
            'garage'=>'required',
            'date'=>'required',
            'desp'=>'required',
            'video'=>'required',
        ]);




        properties::find($id)->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'status'=>$request->status,
            'type'=>$request->type,
            'place'=>$request->place,
            'partner'=>$request->partner,
            'position'=>$request->position,
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
            'video'=>$video,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('update', 'Properties Successfully Updated');
    }






    function preview_update(Request $request, $id){


        $preview = properties::find($id);

        if($request->preview != ''){
            $old_preview = public_path('uploads/properties/preview/'.$preview->preview);
            unlink($old_preview);




            $image_preview = $request->preview;
            $extension_preview = $image_preview->extension();
            $preview ='property_preview'.'-'.$id.'-'.random_int(1111, 9999).'.'.$extension_preview;

            Image::make($image_preview)->resize(1000, 750)->save(public_path('uploads/properties/preview/'.$preview));

            properties::find($id)->update([
                'preview'=>$preview,
            ]);

            return back()->with('update', 'Properties Successfully Updated');

        }

        if($request->plan != ''){
            $old_plan = public_path('uploads/properties/plan/'.$preview->plan);
            unlink($old_plan);






            $image_plan = $request->plan;
            $extension_plan = $image_plan->extension();
            $plan ='property_plan'.'-'.$id.'-'.random_int(1111, 9999).'.'.$extension_plan;

            Image::make($image_plan)->resize(770, 483)->save(public_path('uploads/properties/plan/'.$plan));

            properties::find($id)->update([
                'plan'=>$plan,
            ]);


            return back()->with('update', 'Properties Successfully Updated');

        }

        return back();


    }

    function gallery_delete($id){

        $gallery = Gallery::find($id);
        $current = public_path('uploads/properties/gallery/'.$gallery->gallery);
        unlink($current);
        Gallery::find($id)->delete();
        return back();
    }



    function gallery_update(Request $request, $id){

        $gallery = $request->gallery;

        if($gallery != ''){

            foreach($gallery as $gallery){


                $extension_gallery = $gallery->extension();
                $gallery_file_name ='gallery'.'-'.'properties'.$id.'-'.random_int(1111, 9999).'.'.$extension_gallery;

                Image::make($gallery)->resize(760, 510)->save(public_path('uploads/properties/gallery/'.$gallery_file_name));

                Gallery::insert([
                    'gallery'=>$gallery_file_name,
                    'properties_id'=>$id,
                    'created_at'=>Carbon::now(),
                ]);


                }



                return back()->with('success', 'Gallery Successfully Added');

        }

            return back();
    }


    function property_delete($id){


        $property = properties::find($id);
        $place = Place::find($property->place);
        $sum = $place->count-1;

        Place::find($place->id)->update([
            'count'=>$sum,
        ]);


        $preview = public_path('uploads/properties/preview/'.$property->preview);
        unlink($preview);

        $plan = public_path('uploads/properties/plan/'.$property->plan);
        unlink($plan);

        $gallery = Gallery::where('properties_id', $id)->get();

        foreach($gallery as $gallery){

            $gallery_image = public_path('uploads/properties/gallery/'.$gallery->gallery);
            unlink($gallery_image);

            Gallery::find($gallery->id)->delete();
        }


        properties::find($id)->delete();



        return back()->with('deleted', 'Properties Successfully Deleted');




    }

    function property_status($id){
        $status = properties::find($id)->on_off;

        if($status == 0){
            properties::find($id)->update([
                'on_off'=>1,
            ]);
        }
        else{
            properties::find($id)->update([
                'on_off'=>0,
            ]);
        }

        return back()->with('status', 'Property Status Change');
    }


}
