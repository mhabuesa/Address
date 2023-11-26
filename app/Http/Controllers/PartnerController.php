<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
Use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{

    function partner_list(){
        $partners = Partner::all();
        return view('admin.partner.partner', [
            'partners'=>$partners,
        ]);
    }

    function partner_store( Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'building'=>'required',
            'address'=>'required',
            'video'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;



        Image::make($image)->resize(1000, 750)->save(public_path('uploads/partner/'.$file_name));


        $explode = explode('&',$request->video);
        $video = $explode[0];


        Partner::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'building'=>$request->building,
            'address'=>$request->address,
            'video'=>$video,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('insert', 'Partner Inserted Successfully');



    }

    function partner_details($id){
        $partner = Partner::find($id);
        return view('admin.partner.partner_details', [
            'partner'=>$partner,
        ]);
    }

    function partner_update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'building'=>'required',
            'address'=>'required',
            'video'=>'required',
        ]);

       if($request->image == ''){

        $explode = explode('&',$request->video);
        $video = $explode[0];

        Partner::find($id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'building'=>$request->building,
            'address'=>$request->address,
            'video'=>$video,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('update', 'Partner Updated Successfully');

       }


       else{
        $partner_image = Partner::find($id)->image;
        $current = public_path('uploads/partner/'.$partner_image);
        unlink($current);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

        Image::make($image)->resize(1000, 750)->save(public_path('uploads/partner/'.$file_name));

        $explode = explode('&',$request->video);
        $video = $explode[0];

        Partner::find($id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'building'=>$request->building,
            'address'=>$request->address,
            'video'=>$video,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('update', 'Partner Updated Successfully');


       }

    }


    function partner_status($id){
        $status = Partner::find($id)->status;

        if($status == 0){
            Partner::find($id)->update([
                'status'=>1
            ]);
        }
        else{
            Partner::find($id)->update([
                'status'=>0
            ]);
        }
        return back()->with('status', 'Partner Status Changed');
    }

    function partner_delete($id){
        $partner_image = Partner::find($id)->image;
        $current = public_path('uploads/partner/'.$partner_image);
        unlink($current);

        Partner::find($id)->delete();
        return back()->with('delete', 'Partner Deleted Successfully');

    }

}
