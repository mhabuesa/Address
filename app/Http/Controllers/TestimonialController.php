<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    function testimonial(){
        $testimonials = Testimonial::all();
        return view('admin.testimonial.testimonial', [
            'testimonials'=>$testimonials,
        ]);
    }

    function testimonial_store(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'desp'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $image_name = str_replace(' ', '-', $request->name).'-'.random_int(1111,9999).'.'. $extension;

        Image::make($image)->resize(252, 270)->save(public_path('uploads/testimonial/'.$image_name));

        Testimonial::insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'desp'=>$request->desp,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('success', 'Testimonial Added Successfully');


    }

    function testimonial_status($id){
        $testimonial = Testimonial::find($id);

        if($testimonial->status == '0'){
            Testimonial::find($id)->update([
                'status'=>1,
            ]);
        }

        else{
            Testimonial::find($id)->update([
                'status'=>0,
            ]);
        }

        return back()->with('update', 'Status Updated');
    }

    function testimonial_details($id){
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.testimonial_details',[
            'testimonial'=>$testimonial,
        ]);
    }


    function testimonial_update(Request $request,$id){
       $request->validate([
            'name'=>'required',
            'address'=>'required',
            'desp'=>'required',
       ]);

       $testimonial = Testimonial::find($id);

       if($request->image == ''){

        Testimonial::find($id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);


        return back()->with('update', 'Testimonial Updated Successfully');
    }

    else{

        $current = public_path('uploads/testimonial/'.$testimonial->image);
        unlink($current);

        $image = $request->image;
        $extension = $image->extension();
        $image_name = str_replace(' ', '-', $request->name).'-'.random_int(1111,9999).'.'. $extension;

        Image::make($image)->resize(252, 270)->save(public_path('uploads/testimonial/'.$image_name));

        Testimonial::find($id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'desp'=>$request->desp,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);


        return back()->with('update', 'Testimonial Updated Successfully');
    }


    }

    function testimonial_delete($id){

        $testimonial = Testimonial::find($id);
        $current = public_path('uploads/testimonial/'.$testimonial->image);
        unlink($current);

        Testimonial::find($id)->delete();

        return back()->with('delete', 'Testimonial Deleted Successfully');
    }
}
