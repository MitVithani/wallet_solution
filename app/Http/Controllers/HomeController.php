<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\ShareLink;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $productDtl = Product::where('user_id', $user_id)->count();
        if($productDtl > 0){
            return redirect(route('products.index'));
        }else{
            return view('cart.empty_cart');
        }
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $totalUsers = User::count();
        $totalPayment = ShareLink::where(['status' => 1])->sum('amount');
        return view('admin.home')->with(['totalUsers' => $totalUsers, 'totalPayment' => $totalPayment]);
    }

    public function userHome(){
        $shops=User::paginate(25);
        return view('homepage', compact('shops'));
    }

}
