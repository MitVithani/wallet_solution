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

    public function getVerifyMail(Request $request)
    {
        $input = $request->all();
        $email = base64_decode($input['email']);
        $name = '';

        $check_user = User::where('email', $email)->first();
        if (!empty($check_user) || $check_user != '') {
                   $name = $check_user->fname .' '. $check_user->lname;
            $check_user1 = User::where('email', $email)->where('is_confirm', 0)->first();
            if (!empty($check_user1) || $check_user1 != '') {
                $updateObj = User::where('email', $email)->update(['is_confirm' => 1]);
                $success = "Your registration has been done successfully.<br/>Thank you.";
                $request->session()->put("success", $success);
                $code = 1;
            } else {
                $code = 0;
                $error = "Your email is already confirmed.<br/>Thank you.";
                $request->session()->put("error", $error);
            }
        } else {
            $code = 0;
            $error = 'Email Address Not Exist.';
            $request->session()->put("error", $error);
        }
        $data1 = array('code' => $code, 'name' => $name);
        return view('verify_email', compact('request', 'data1'));
    }
}
