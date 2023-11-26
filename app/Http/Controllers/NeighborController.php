<?php

namespace App\Http\Controllers;

use App\Models\Neighbor;
use App\Models\NeighborApartment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class NeighborController extends Controller
{
    function neighbor_apartment(){
        $neighbors = NeighborApartment::all();
        return view('admin.neighbor.neighbor_apartment', [
            'neighbors'=>$neighbors,
        ]);
    }
    function neighbor_apartment_store(Request $request){

        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

        Image::make($image)->resize(750, 500)->save(public_path('uploads/neighbor/apartment/'.$file_name));

        $slug = Str::slug($request->name);


        NeighborApartment::insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'image'=>$file_name,
            'slug'=>$slug,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('insert', 'Apartment Inserted Successfully');
    }


    function neighbor_apartment_edit($id){
        $apartment = NeighborApartment::find($id);
        return view('admin.neighbor.neighbor_apartment_edit', [
            'apartment'=>$apartment,
        ]);
    }


    function neighbor_apartment_update(Request $request, $id){


        $request->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

       if($request->image == ''){


        NeighborApartment::find($id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('update', 'Neighbor Apartment Updated Successfully');

       }


       else{
        $apartment_image = NeighborApartment::find($id)->image;
        $current = public_path('uploads/neighbor/apartment/'.$apartment_image);
        unlink($current);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

        Image::make($image)->resize(1000, 750)->save(public_path('uploads/neighbor/apartment/'.$file_name));


        NeighborApartment::find($id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('update', 'Neighbor Apartment Updated Successfully');


       }


    }

    function neighbor_apartment_status($id){
        $status = NeighborApartment::find($id)->status;

        if($status == 0){
            NeighborApartment::find($id)->update([
                'status'=>1
            ]);
        }
        else{
            NeighborApartment::find($id)->update([
                'status'=>0
            ]);
        }
        return back()->with('status', 'Neighbor Apartment Status Changed');
    }


    function neighbor_apartment_delete($id){
        $apartment_image = NeighborApartment::find($id)->image;
        $current = public_path('uploads/neighbor/apartment/'.$apartment_image);
        unlink($current);

        NeighborApartment::find($id)->delete();
        return back()->with('delete', 'Apartment Deleted Successfully');
    }

    function neighbor_person(){
        $apartments = NeighborApartment::all();
        $neighbors = Neighbor::all();
        return view('admin.neighbor.neighbor_person', [
            'apartments'=>$apartments,
            'neighbors'=>$neighbors,
        ]);
    }


    function neighbor_person_store(Request $request){


        $request->validate([
            'name'=>'required',
            'apartment'=>'required',
            'flat'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

        Image::make($image)->resize(260, 270)->save(public_path('uploads/neighbor/person/'.$file_name));



        Neighbor::insert([
            'name'=>$request->name,
            'flat'=>$request->flat,
            'image'=>$file_name,
            'email'=>$request->email,
            'apartment_id'=>$request->apartment,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('insert', 'Neighbor Inserted Successfully');


    }


    function neighbor_status($id){
        $status = Neighbor::find($id)->status;

        if($status == 0){
            Neighbor::find($id)->update([
                'status'=>1,
            ]);

        }
        else{
            Neighbor::find($id)->update([
                'status'=>0,
            ]);
        }

        return back()->with('status', 'Status Changed Successfully');
    }


    function neighbor_edit($id){
        $apartments = NeighborApartment::all();
        $neighbor = Neighbor::find($id);
        return view('admin.neighbor.neighbor_edit', [
            'apartments'=>$apartments,
            'neighbor'=>$neighbor,
        ]);
    }

    function neighbor_update(Request $request, $id){

        $request->validate([
            'name'=>'required',
            'apartment'=>'required',
            'flat'=>'required',
            'email'=>'required',
        ]);

        if($request->image == ''){
            Neighbor::find($id)->update([
                'name'=>$request->name,
                'flat'=>$request->flat,
                'email'=>$request->email,
                'apartment_id'=>$request->apartment,
            ]);
        }

        else{

            $neighbor_image = Neighbor::find($id)->image;
            $current = public_path('uploads/neighbor/person/'.$neighbor_image);
            unlink($current);

            $image = $request->image;
            $extension = $image->extension();
            $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

            Image::make($image)->resize(260, 270)->save(public_path('uploads/neighbor/person/'.$file_name));



            Neighbor::find($id)->update([
                'name'=>$request->name,
                'flat'=>$request->flat,
                'image'=>$file_name,
                'email'=>$request->email,
                'apartment_id'=>$request->apartment,
                'created_at'=>Carbon::now(),
            ]);
        }



        return back()->with('update', 'Neighbor Updated Successfully');
    }


    function neighbor_delete($id){
        $neighbor_image = Neighbor::find($id)->image;
        $current = public_path('uploads/neighbor/person/'.$neighbor_image);
        unlink($current);

        Neighbor::find($id)->delete();
        return back()->with('delete', 'Neighbor Deleted Successfully');
    }
































}
