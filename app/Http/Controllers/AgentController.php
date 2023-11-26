<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AgentController extends Controller
{
    function agent(){
        $agents = Agent::all();
        return view('admin.agent.agent', [
            'agents'=>$agents,
        ]);
    }

    function agent_store(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'image'=>'required',
        ]);

        $image = $request->image;
        $extension = $image->extension();
        $image_name = str_replace(' ', '-', $request->name).'-'. random_int(0000, 9999).'.'.$extension;

        Image::make($image)->resize(270, 328)->save(public_path('uploads/agent/'.$image_name));

        Agent::insert([
            'name'=>$request->name,
            'title'=>$request->title,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('added', 'Agent Added Successfully');

    }

    function agent_details($id){
        $agent = Agent::find($id);
        return view('admin.agent.agent_details',[
            'agent'=>$agent,
        ]);
    }
    function agent_update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
        ]);

        $agent = Agent::find($id);
        $image = $request->image;

        if($image !=''){
            $current = public_path('uploads/agent/'.$agent->image);
            unlink($current);

            $extension = $image->extension();
            $image_name = str_replace(' ', '-', $request->name).'-'. random_int(0000, 9999).'.'.$extension;

        Image::make($image)->resize(270, 328)->save(public_path('uploads/agent/'.$image_name));

        Agent::find($id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('update', 'Agent Info Updated');


        }

        else{
            Agent::find($id)->update([
                'name'=>$request->name,
                'title'=>$request->title,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram,
                'linkedin'=>$request->linkedin,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('update', 'Agent Info Updated');
        }


    }




    function agent_delete($id){
        $agent = Agent::find($id);
        $current = public_path('uploads/agent/'.$agent->image);
        unlink($current);

        Agent::find($id)->delete();
        return back()->with('deleted', $agent->name.' Agent Deleted Successfully');
    }




}
