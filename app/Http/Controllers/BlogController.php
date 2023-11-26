<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    function add_blog(){
        return view('admin.blog.add_blog');
    }

    function blog_store(Request $request){
        $request->validate([
            'title'=>'required',
            'desp'=>'required',
            'image'=>'required|image',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $image_name = 'blog'.'-'.random_int(0000,9999).'.'.$extension;

        Image::make($image)->resize(1000, 750)->save(public_path('uploads/blog/'.$image_name));


        Blog::insert([
            'title'=>$request->title,
            'desp'=>$request->desp,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('created', 'Blog Created Successfully');

    }

    function blog_list(){
        $blogs = Blog::all();
        return view('admin.blog.blog_list', [
            'blogs'=>$blogs,
        ]);
    }

    function blog_details($id){
        $blog = Blog::find($id);
        return view('admin.blog.blog_details', [
            'blog'=>$blog,
        ]);
    }



    function blog_update(Request $request, $id){

        $request->validate([
            'title'=>'required',
            'desp'=>'required',
        ]);



        $image = $request->image;

        if($image == ''){

            Blog::find($id)->update([
                'title'=>$request->title,
                'desp'=>$request->desp,
            ]);
        }

        else{

            $data_image = Blog::find($id)->image;
            $current = public_path('uploads/blog/'.$data_image);
            unlink($current);

            $extension = $image->extension();
            $image_name = 'blog'.'-'.random_int(0000,9999).'.'.$extension;

            Image::make($image)->resize(1000, 750)->save(public_path('uploads/blog/'.$image_name));

            Blog::find($id)->update([
                'title'=>$request->title,
                'desp'=>$request->desp,
                'image'=>$image_name,
            ]);



        }
        return back()->with('update', 'Blog Updated Successfully');

    }


    function blog_delete($id){

        $data_image = Blog::find($id)->image;
        $current = public_path('uploads/blog/'.$data_image);
        unlink($current);

        Blog::find($id)->delete();

        return back()->with('delete', 'Blog Deleted Successfully');

    }
}
