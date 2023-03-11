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
}
