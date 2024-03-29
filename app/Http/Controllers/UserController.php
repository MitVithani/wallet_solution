<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //user profile
    public function show()
    {
        return view('profile');
    }
    //update profile
    public function userProfileUpdate(Request $request)
    {
        $id=auth()->user()->id;
        $user = User::find($id);

        $user->name= $request['name'];
        $user->phone_number= $request['phone'];
        $user->email= $request['new_email'];
        $user->password= Hash::make($request['new_password']);

        $user->save();
        return back()->with('success','updated successfully!');;
    }
}
