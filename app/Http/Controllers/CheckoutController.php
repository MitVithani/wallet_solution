<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //checkout confirmed
    public function order_confirmed(){
        return view('order_confirmed');
    }

    public function order_history(){
        return view('order_history');
    }

    public function order_detail(){
        return view('order_detail');
    }
}
