<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Image;
use App\Models\User;
use App\Models\Customer;
// use Flash;
use Response;

class UsersProductController extends AppBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usersProducts($id)
    {
        $userDtl = User::where('id', $id)->first();
        $productDtl = Product::where('user_id', $id)->get();
        return view('userProducts.index')->with(['userDtl' => $userDtl, 'productDtl' => $productDtl]);
    }
    public function usersProductspayout($id)
    {
        $userDtl = User::where('id', $id)->first();
        $productDtl = Product::where('user_id', $id)->get();
        return view('userProducts.checkOut')->with(['userDtl' => $userDtl, 'productDtl' => $productDtl]);
    }

    public function saveCustomer(Request $request)
    {
        $request->request->remove('_token');
        $checkCust = Customer::where(['email' => $request['email'], 'phone_number' => $request['phone_number']])->first();
        if(empty($checkCust)){
            Customer::create(['name' => $request['name'], 'email' => $request['email'], 'phone_number' => $request['phone_number']]);
            // return 1;
            $data['status'] = 1;
        }else{
            // return 2;
            $data['status'] = 2;
        }
        $data['request'] = $request->all();
        return $data;
    }

    public function sendPayment(Request $request)
    {

    }

}
