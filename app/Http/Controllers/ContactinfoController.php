<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    function contact_info(){
        $contact = Contact::find(1);
        return view('admin.contact.contact_info', [
            'contact'=>$contact,
        ]);
    }


    function contact_update(Request $request){
        $request->validate([
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'facebook'=>'required',
        ]);

        Contact::find(1)->update([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('update', 'Contact Info Updated');
    }
}
