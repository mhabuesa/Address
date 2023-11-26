<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlaceController extends Controller
{
    function place(){
        $places = Place::all();
        return view('admin.place.place', [
            'places'=>$places,
        ]);
    }

    function place_store(Request $request){
        $request->validate([
            'name'=>'required|unique:places',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $file_name = $request->name.'-'.random_int(000, 999).'.'.$extension;

        Image::make($image)->save(public_path('uploads/place/'.$file_name));


        Place::insert([
            'name'=>$request->name,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),

        ]);
        return back()->with('insert', 'Place Added Successfully');



    }

    function place_status($id){
        $status = Place::find($id);
        if($status->status == 0){
            Place::find($id)->update([
                'status'=>1
            ]);
            return back()->with('status', $status->name."'s".' Status Changes');
        }
        else{
            Place::find($id)->update([
                'status'=>0
            ]);
            return back()->with('status', $status->name."'s".' Status Changes');
        }
    }

    function place_edit($id){
        $place = Place::find($id);
        return view('admin.place.place_edit', [
            'place'=>$place,
        ]);


    }
    function place_update(Request $request, $id){


        if($request->image == ''){
            $request->validate([
                'name'=>'required',
            ]);

            Place::find($id)->update([
                'name'=>$request->name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('updated', 'Place Updated Successfully');
        }
        else{

            $request->validate([
                'name'=>'required',
                'image'=>'required'
            ]);

            $data_image = Place::find($id)->image;
            $current = public_path('uploads/place/'.$data_image);
            unlink($current);


            $image = $request->image;
            $extension = $image->extension();
            $file_name = str_replace(' ', '-', $request->name).'-'.random_int(000, 999).'.'.$extension;

            Image::make($image)->save(public_path('uploads/place/'.$file_name));


            Place::find($id)->update([
                'name'=>$request->name,
                'image'=>$file_name,
                'created_at'=>Carbon::now(),

            ]);
            return back()->with('updated', 'Place Updated Successfully');

        }



    }




    function place_delete($id){
        $image = Place::find($id);
        $current = public_path('uploads/place/'.$image->image);
        unlink($current);
        Place::find($id)->delete();
        return back()->with('deleted', $image->name.' Deleted Successfully');



    }
}
