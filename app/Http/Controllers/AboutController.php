<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\BannerImage;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\WhyChoose;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    function about_us(){
        $banner = BannerImage::find(1);
        $aboutSection = AboutSection::find(1);
        $why_choose = WhyChoose::find(1);
        $counter = Counter::find(1);
        $contact = Contact::find(1);
        return view('frontend.about_us', [
            'banner'=>$banner,
            'aboutSection'=>$aboutSection,
            'why_choose'=>$why_choose,
            'counter'=>$counter,
            'contact'=>$contact,
        ]);
    }

    function about_banner(){
        $banner = BannerImage::find(1);
        return view('admin.about.about_banner', [
            'banner'=>$banner,
        ]);
    }

    function banner_update(Request $request){
       $request->validate([
        'image'=>'required',
       ]);

       $image = $request->image;
       $extension = $image->extension();
       $file_name = 'banner_image'.'.'.$extension;

       $data_image = BannerImage::find(1)->image;
       $old_image = public_path('uploads/about/banner/'.$data_image);
       unlink($old_image);


       Image::make($image)->resize(1920,1280)->save(public_path('uploads/about/banner/'. $file_name));

       BannerImage::find(1)->update([
        'image'=>$file_name,
       ]);
       return back()->with('update', 'Banner Image Updated');
    }


    function about_section(){
        $about_section = AboutSection::find(1);
        return view('admin.about.about_section', [
            'about_section'=>$about_section,
        ]);
    }

    function about_section_update(Request $request){
        $request->validate([
            'desp'=>'required',
            'video'=>'required',
        ]);



        $image = $request->image;

        if($image == ''){

        $explode = explode('&',$request->video);
        $video = $explode[0];

        AboutSection::find(1)->update([

            'desp'=>$request->desp,
            'video'=>$video,
        ]);
        }

        else{

            $data_image = AboutSection::find(1)->image;
            $current = public_path('uploads/about/cover/'.$data_image);
            unlink($current);


            $extension = $image->extension();
            $image_name = 'bg-video'.'.'. $extension;

            Image::make($image)->resize(1000, 750)->save(public_path('uploads/about/cover/'.$image_name));

            $explode = explode('&',$request->video);
            $video = $explode[0];

            AboutSection::find(1)->update([

                'desp'=>$request->desp,
                'image'=>$image_name,
                'video'=>$video,
            ]);
        }


    return back()->with('update', 'About Updated');

    }

    function why_choose(){
        $why_choose = WhyChoose::find(1);
        return view('admin.about.why_choose',[
            'why_choose'=>$why_choose,
        ]);
    }

    function why_choose_update(Request $request){

        $request->validate([
            'title1'=>'required',
            'desp1'=>'required',
            'title2'=>'required',
            'desp2'=>'required',
            'title3'=>'required',
            'desp3'=>'required',
        ]);


        WhyChoose::find(1)->update([
            'title1'=>$request->title1,
            'desp1'=>$request->desp1,
            'title2'=>$request->title2,
            'desp2'=>$request->desp2,
            'title3'=>$request->title3,
            'desp3'=>$request->desp3,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('update', 'Updated Successfully');
    }

    function counter_up(){
        $counter_up = Counter::find(1);
        return view('admin.about.counter_up', [
            'counter_up'=>$counter_up,
        ]);
    }


    function counter_up_update(Request $request){

        $request->validate([
            'title1'=>'required',
            'number1'=>'required',
            'title2'=>'required',
            'number2'=>'required',
            'title3'=>'required',
            'number3'=>'required',
        ]);


        Counter::find(1)->update([
            'title1'=>$request->title1,
            'number1'=>$request->number1,
            'title2'=>$request->title2,
            'number2'=>$request->number2,
            'title3'=>$request->title3,
            'number3'=>$request->number3,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('update', 'Updated Successfully');
    }


    function test(){
        return view('admin.test');
    }
}
