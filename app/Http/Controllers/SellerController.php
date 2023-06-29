<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        $shops=User::paginate(25);
        return view('allseller', compact('shops'));
    }
}
