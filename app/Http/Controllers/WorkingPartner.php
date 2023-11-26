<?php

namespace App\Http\Controllers;

use App\Models\WorkingPartner as ModelsWorkingPartner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WorkingPartner extends Controller
{
    function working_partner(){
        $partners = ModelsWorkingPartner::all();
        return view('admin.working_partner.working_partner', [
            'partners'=>$partners
        ]);
    }


    function working_partner_store(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);


        $image = $request->image;
        $extension = $image->extension();
        $file_name = $request->name.'-'.random_int(000, 999).'.'.$extension;

        Image::make($image)->save(public_path('uploads/working_partner/'.$file_name));


        ModelsWorkingPartner::insert([
            'name'=>$request->name,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),

        ]);
        return back()->with('insert', 'Partner Added Successfully');

    }

    function working_partner_edit($id){
        $partner = ModelsWorkingPartner::find($id);
        return view('admin.working_partner.working_partner_edit', [
            'partner'=>$partner,
        ]);
    }



    function working_partner_update(Request $request, $id){

        if($request->image == ''){
            $request->validate([
                'name'=>'required',
            ]);

            ModelsWorkingPartner::find($id)->update([
                'name'=>$request->name,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('updated', 'Partner Updated Successfully');
        }
        else{

            $request->validate([
                'name'=>'required',
                'image'=>'required'
            ]);

            $data_image = ModelsWorkingPartner::find($id)->image;
            $current = public_path('uploads/working_partner/'.$data_image);
            unlink($current);


            $image = $request->image;
            $extension = $image->extension();
            $file_name = $request->name.'-'.random_int(000, 999).'.'.$extension;

            Image::make($image)->save(public_path('uploads/working_partner/'.$file_name));


            ModelsWorkingPartner::find($id)->update([
                'name'=>$request->name,
                'image'=>$file_name,
                'created_at'=>Carbon::now(),

            ]);
            return back()->with('updated', 'Partner Updated Successfully');

        }
    }


    function working_partner_delete($id){
        $image = ModelsWorkingPartner::find($id);
        $current = public_path('uploads/working_partner/'.$image->image);
        unlink($current);
        ModelsWorkingPartner::find($id)->delete();
        return back()->with('deleted', $image->name.' Deleted Successfully');



    }


    function working_partner_status($id){
        $status = ModelsWorkingPartner::find($id);
        if($status->status == 0){
            ModelsWorkingPartner::find($id)->update([
                'status'=>1
            ]);
            return back()->with('status', $status->name."'s".' Status Changes');
        }
        else{
            ModelsWorkingPartner::find($id)->update([
                'status'=>0
            ]);
            return back()->with('status', $status->name."'s".' Status Changes');
        }
    }




}
