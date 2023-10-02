<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //store

    public function store(Request $request){

        $data=new Address();
        $data->user_id = auth()->user()->id;
        $data->name =$request['name'];
        // $data->lastname =$request['lastname'];
        $data->address =$request['address'];
        $data->country=$request['country'];
        $data->state =$request['state'];
        $data->city =$request['city'];
        $data->postal_code =$request['postal_code'];
        $data->phone =$request['phone'];
        $data->save();

        return back();
    }

    public function edit(Request $request){


        $id=auth()->user()->id;
        $address = Address::where('user_id',$id)->first();
        $address->name =$request['name'];
        $address->address =$request['address'];
        $address->country=$request['country'];
        $address->state =$request['state'];
        $address->city =$request['city'];
        $address->postal_code =$request['postal_code'];
        $address->phone =$request['phone'];
        $address->save();

        return back();
    }

}
