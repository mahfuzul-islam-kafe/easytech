<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function ViewAccount(){
        $id = Auth::id();
        $user =  User::find($id);
        return view('admin.profile',compact('user'));
    }
    public function EditProfile(Request $request){
        $id = Auth::id();
        $user =  User::find($id);
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/profileimage/' . $user->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/profileimage'), $filename);
            $user['image'] = $filename;
        }
        $user->save();
        $notification = array(
            'message' => 'Profile Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
