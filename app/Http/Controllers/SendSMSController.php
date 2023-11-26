<?php

namespace App\Http\Controllers;

use App\Models\ClientReg;
use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    function send_sms(){
        return view('send_sms.send_sms');
    }


    function sms_delivered(Request $request){

       return back();

    }
}
