<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OrganizerController extends Controller
{
    function organizer_dash(){
        $organizers = Organizer::all();
        return view('admin.organizer.organizer_dash', [
            'organizers'=>$organizers,
        ]);
    }


    function organizer_store(Request $request){


        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'video'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

        Image::make($image)->resize(260, 174)->save(public_path('uploads/organizer/'.$file_name));

        $explode = explode('&',$request->video);
        $video = $explode[0];



        Organizer::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'video'=>$video,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('insert', 'Organizer Inserted Successfully');
    }


    function organizer_status($id){
        $status = Organizer::find($id)->status;

        if($status == 0){
            Organizer::find($id)->update([
                'status'=>1,
            ]);

        }
        else{
            Organizer::find($id)->update([
                'status'=>0,
            ]);
        }

        return back()->with('status', 'Status Changed Successfully');
    }


    function organizer_edit($id){
        $organizer = Organizer::find($id);
        return view('admin.organizer.organizer_edit', [
            'organizer'=>$organizer,
        ]);
    }
    function organizer_update(Request $request, $id){
        $organizer = Organizer::find($id);


        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'video'=>'required',
        ]);

        $explode = explode('&',$request->video);
        $video = $explode[0];


        if($request->image == ''){

            Organizer::find($id)->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'video'=>$video,
                'created_at'=>Carbon::now(),

            ]);

        }

        else{

            $organizer_image = Organizer::find($id)->image;
            $current = public_path('uploads/organizer/'.$organizer_image);
            unlink($current);

            $image = $request->image;
            $extension = $image->extension();
            $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

            Image::make($image)->resize(260, 174)->save(public_path('uploads/organizer/'.$file_name));



            Organizer::find($id)->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'video'=>$video,
                'image'=>$file_name,

                'created_at'=>Carbon::now(),
            ]);
        }



        return back()->with('update', 'Organizer Updated Successfully');
    }


    function organizer_delete($id){
        $organizer_image = Organizer::find($id)->image;
        $current = public_path('uploads/organizer/'.$organizer_image);
        unlink($current);

        organizer::find($id)->delete();
        return back()->with('delete', 'Organizer Deleted Successfully');
    }


}
