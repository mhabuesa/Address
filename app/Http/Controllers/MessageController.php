<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\properties;
use App\Models\ServiceMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function message(){
        $messages = Message::all();
        return view('admin.message.message', [
            'messages'=>$messages,
        ]);
    }

    function message_read($id){

        $message = Message::find($id);

        if($message->status == 0){
            Message::find($id)->update([
                'status'=>1
            ]);
        }

        $property = properties::where('id', $message->property_id)->get();
        return view('admin.message.message_read', [
            'message'=>$message,
            'property'=>$property,
        ]);



    }


    function message_delete($id){
        Message::find($id)->delete();
        return back()->with('delete', 'Message Deleted Successfully');
    }


    function service_message(){
        $messages = ServiceMessage::all();
        return view('admin.message.service_message',[
            'messages'=>$messages,
        ]);
    }




    function service_message_read($id){

        $message = ServiceMessage::find($id);

        if($message->status == 0){
            ServiceMessage::find($id)->update([
                'status'=>1
            ]);
        }

       return view('admin.message.service_message_read', [
            'message'=>$message,
        ]);
    }

    function service_message_delete($id){
        ServiceMessage::find($id)->delete();
        return back()->with('delete', 'Message Deleted Successfully');
    }


}
