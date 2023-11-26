<?php

namespace App\Http\Controllers;

use App\Models\ClientReg;
use App\Models\Contact;
use App\Models\TempUser;
use App\Models\User;
use App\Models\verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientRegController extends Controller
{
    function client_store(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required|unique:client_regs',
            'email'=>'required|unique:client_regs',
            'password'=>'required',
        ]);





        //Sms Verify

        $otp = random_int(12345, 99999);
        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "K9YXIwC5K6nifLYd4XL3";
        $senderid = "8809617612585";
        $number = $request->phone;
        $message = "Welcome to BD ADDRESS. Your Account Verification Code is "."'".$otp."'". " Thanks for Connecting With BD ADDRESS ❤️";



        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);



        $user_id = TempUser::insertGetId([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'otp'=>$otp,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('client.verify',$user_id)->with('SendCode', 'Send Your Verification Code');

    }



    //Verification Page
    function client_verify($user_id){
        $contact = Contact::find(1);
        return view('frontend.client.verify',[
            'contact'=>$contact,
            'user_id'=>$user_id,
        ]);
    }




    function client_verification(Request $request, $user_id){

        $data = TempUser::find($user_id);


        if($request->code == $data->otp){

            ClientReg::insert([
                'name'=>$data->name,
                'phone'=>$data->phone,
                'email'=>$data->email,
                'password'=>$data->password,
                'created_at'=>Carbon::now(),
            ]);

            TempUser::find($user_id)->update([
                'verify'=>1,
            ]);


            return redirect()->route('client.login.page')->with('verified', 'Account Verification Successful');
        }
        else{
            return back()->with('invalid', 'Verification Code Invalid');
        }
    }




    function resend($user_id){
        //Sms Verify

        $phone = TempUser::find($user_id)->phone;
        $otp = random_int(12345, 99999);
        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "K9YXIwC5K6nifLYd4XL3";
        $senderid = "8809617612585";
        $number = $phone;
        $message = "Welcome to BD ADDRESS. Your Account Verification Code is "."'".$otp."'". " Thanks for Connecting With BD ADDRESS ❤️";



        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);



        $user_id = TempUser::find($user_id)->update([
            'otp'=>$otp,
        ]);

        return redirect()->route('client.verify',$user_id)->with('SendCode', 'Send Your Verification Code'.$response);

    }




    function client_loggedIn(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(ClientReg::where('email', $request->email)->exists()){


            if(Auth::guard('client')->attempt(['email'=>$request->email,  'password'=>$request->password])){
                return redirect()->route('index');
            }


            else{
                return back()->with('wrong', 'Password Does Not Match');
            }
        }

        else{
            return back()->with('exists', 'Email Does Not Exists');
        }

    }



    function forget(){
        $contact = Contact::find(1);
        return view('frontend.client.forget_pass',[
            'contact'=>$contact,
        ]);
    }




    function forget_pass(Request $request){


        if(ClientReg::where('phone', $request->phone)->exists()){

            $phone =  $request->phone;
        $otp = random_int(12345, 99999);
        $url = "http://bulksmsbd.net/api/smsapi";
        $api_key = "K9YXIwC5K6nifLYd4XL3";
        $senderid = "8809617612585";
        $number = $phone;
        $message = "Welcome to BD ADDRESS. Your Password Reset Code is "."'".$otp."'". " Thanks for Connecting With BD ADDRESS ❤️";



        $data = [
            "api_key" => $api_key,
            "senderid" => $senderid,
            "number" => $number,
            "message" => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        $id = ClientReg::where('phone', $request->phone)->get()->first()->id;

        ClientReg::find($id)->update([
            'forget_otp'=>$otp,
        ]);

        return redirect()->route('otp.verify',$id)->with('SendCode', 'Send Your Verification Code');

        }
        else{
           return back()->with('invalid', 'Invalid Phone Number');
        }


    }

    function otp_verify($id){
        $contact = Contact::find(1);
        return view('frontend.client.forget_pass_verify',[
            'contact'=>$contact,
            'id'=>$id,
        ]);
    }






    function forget_otp(Request $request, $id){
        $data = ClientReg::find($id);


        if($request->code == $data->forget_otp){

            return redirect()->route('update.pass',$id)->with('verified', 'Account Verification Successful');
        }
        else{
            return back()->with('invalid', 'Verification Code Invalid');
        }
    }



    function update_pass($id){
        $contact = Contact::find(1);
        return view('frontend.client.password_update',[
            'contact'=>$contact,
            'id'=>$id,
        ]);
    }

    function password_update(Request $request,  $id){
        $request->validate([
            'password'=>'required',
            'confirmation_password'=>'required',
        ]);

        if($request->password == $request->confirmation_password){

            ClientReg::find($id)->update([
                'password'=>bcrypt($request->password),
            ]);

            return redirect()->route('client.login.page')->with('verified', 'Password Updated Successful');

        }

        else{
            return back()->with('match', 'Confirm Password Does Not Match');
        }
    }




    function client_password_change(Request $request, $id){
        if($request->password == $request->confirmation_password){
          ClientReg::find($id)->update([
            'password'=>bcrypt($request->password),
          ]);
          return back()->with('changed', 'Password Changed Successfully');
        }

        else{
           return back()->with('wrong', 'Confirm Password Does Not Match');
        }
    }
}
