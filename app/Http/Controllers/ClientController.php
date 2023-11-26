<?php

namespace App\Http\Controllers;

use App\Models\ClientReg;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    function client_profile(){

       if(!empty(Auth::guard('client')->user()->name)){
        return view('frontend.client.profile');

       }
       else{
        return redirect()->route('index');
       }
    }

    function client_logout(){
        Auth::guard('client')->logout();
        return redirect()->route('index');
    }
    function client_dashboard(){
        $contact = Contact::find(1);
        if(!empty(Auth::guard('client')->user()->name)){
            return view('frontend.client.dashboard',[
                'contact'=>$contact,
            ]);

           }
           else{
            return redirect()->route('index');
           }
    }



    function client_login(){
        $contact = Contact::find(1);
        return view('frontend.client.login',[
            'contact'=>$contact,
        ]);
    }
    function client_register(){
        $contact = Contact::find(1);
        return view('frontend.client.register',[
            'contact'=>$contact,
        ]);
    }

    function client_profile_update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);

        if($request->image == ''){
            ClientReg::find($id)->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
            ]);
        }
        else{

            if(ClientReg::find($id)->image != ''){
                $image = ClientReg::find($id)->image;
                $current = public_path('uploads/profile/'.$image);
                unlink($current);
            }

            $image = $request->image;
            $extension = $image->extension();
            $file_name =str_replace(' ', '-', $request->name).'-'.random_int(1111, 9999).'.'.$extension;

            Image::make($image)->resize(960, 960)->save(public_path('uploads/profile/'.$file_name));

            ClientReg::find($id)->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'image'=>$file_name,
            ]);

        }

        return back()->with('update', 'Profile Update Successfully');
    }


    function not_found(){
        $contact = Contact::find(1);
        return view('frontend.client.notfound',[
            'contact'=>$contact,
        ]);
    }




 }
