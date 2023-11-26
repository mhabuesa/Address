<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
   function users(){
    $users = User::where('id', '!=',Auth::user()->id)->get();
     return view('admin.users.users', [
        'users'=>$users,
     ]);
   }

   function user_store(Request $request){
     $request->validate([
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required',
        'password_confirmation'=>'required',
     ]);

     if($request->password != $request->password_confirmation){
        return back()->with('match', 'Confirm Password Does Not Match.');
     }
     else{
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success', 'User Created Successfully');
     }


   }

   function user_delete($id){
    User::find($id)->delete();
    return back()->with('delete', 'User Deleted Successfully');
   }

   function user_edit($id){

    $user = User::find($id);
    return view('admin.users.user_edit',[
        'user'=>$user,
    ]);

   }

   function user_update(Request $request, $id){

    $user = User::find($id);
    $request->validate([
        'name'=>'required',
        'email'=>'required',
     ]);


     if($request->password == ''){
        User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('Update', 'User Update Successfully');
     }

     else{
        User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('Update', 'User Update Successfully');
     }

   }
}
