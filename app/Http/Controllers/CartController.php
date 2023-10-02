<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //STORE DATA
    public function addToCart(Request $request){

        $data=new Cart();
        $data->user_id = auth()->user()->id;
        $data->product_id =$request['product_id'];
        $data->price = $request['price'];
        $data->qty = $request['qty'];
        $data->save();

        return redirect()->route('cart_list');

    }

    public function cart_list()
    {
        // $user_id=auth()->user()->id;
        $carts= Cart::where('user_id', auth()->user()->id)->get();

        return view('view_cart', compact('carts'));
    }

    public function removeFromCart($id)
    {
        // Cart::destroy($request->id);
        Cart::where('product_id', $id)->firstorfail()->delete();
        $carts= Cart::where('user_id', auth()->user()->id)->get();
        return view('view_cart', compact('carts'));
    }
}
