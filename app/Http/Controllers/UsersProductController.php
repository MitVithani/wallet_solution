<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Product;
use App\Models\Product_Image;
use App\Models\User;
use App\Models\Customer;
use App\Models\ShareLink;
use App\Models\ShareUrlProduct;
// use Flash;
use Response;

class UsersProductController extends AppBaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function usersProducts($url_link)
    {
        $user_id = explode('/', base64_decode($url_link))[0] ?? '';
        // $link = explode('/', base64_decode($url_link))[1] ?? '';
        $userDtl = User::where('id', $user_id)->first();
        // $productDtl = Product::where('user_id', $user_id)->get();
        $shareLink = ShareLink::with('shareUrlProduct.product.productImage')->where(['user_id' => $user_id, 'rand_link' => $url_link])->first();
        $productDtl = [];
        if(!empty($shareLink->shareUrlProduct)){
            foreach ($shareLink->shareUrlProduct as $key => $shareUrlProduct) {
                $product = $shareUrlProduct->product;
                $product['price'] = $shareUrlProduct->price;
                $product['discount_type'] = $shareUrlProduct->discount_type;
                $product['discount'] = $shareUrlProduct->discount;
                $product['discount_price'] = $shareUrlProduct->discount_price;
                $product['quantity'] = $shareUrlProduct->quantity;
                $product['share_url_product_id'] = $shareUrlProduct->id;
                $productDtl[] = $product;
            }
        }
        return view('userProducts.index')->with(['userDtl' => $userDtl, 'linkProductDtl' => $shareLink, 'productDtl' => $productDtl]);
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
        $checkCust = Customer::where(['email' => $request['email'], 'phone_number' => $request['phone_number'], 'address' => $request['address']])->first();
        if(empty($checkCust)){
            $checkCust = Customer::create(['name' => $request['name'], 'email' => $request['email'], 'phone_number' => $request['phone_number'], 'address' => $request['address']]);
            // return 1;
            $data['status'] = 1;
        }else{
            // return 2;
            $data['status'] = 2;
        }
        $request['cust_id'] = $checkCust->id;
        $data['request'] = $request->all();
        return $data;
    }

    public function sendPayment(Request $request)
    {

        $order_number = 'order-'. rand(1, 99) . rand(1, 99) . rand(1, 99) . rand(1, 99);
        $order_amount = number_format((float)$request->amount, 2, '.', '');
        $order_currency = 'USD';
        $order_description = '4payOrder';
        $merchant_pass = env('MERCHANDPASS');
        $to_md5 = $order_number . $order_amount . $order_currency . $order_description . $merchant_pass;

        $hash = sha1(md5(strtoupper($to_md5)));

        $reqData['merchant_key'] = env('MERCHANDKEY');
        $reqData['operation'] = 'purchase';
        $reqData['methods'] = [ "card" ];
        $reqData['order'] = [
            "number" => $order_number,
            "amount" => $order_amount,
            "currency" => $order_currency,
            "description" => $order_description,
        ];
        $reqData['cancel_url'] = env('APP_URL'). 'cancelPayment/' . $request->link_product_dtl . '/' . $request->cust_id . '/' . $order_amount;
        $reqData['success_url'] = env('APP_URL'). 'successPayment/' . $request->link_product_dtl . '/' . $request->cust_id . '/' . $order_amount;
        $reqData['recurring_init'] = true;
        $reqData['hash'] = $hash;
        // dd($reqData);
        try {
            $response = Http::withBody(
                json_encode($reqData), 'application/json'
            )->post('https://checkout.montypay.com/api/v1/session');
            $jsonData = json_decode(json_encode($response->json()));
            return Redirect::to($jsonData->redirect_url);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function successPayment($id, $cust_id, $amount)
    {
        $shareLink = ShareLink::where(['id' => $id])->update(['status' => 1, 'cust_id' => $cust_id, 'amount' => $amount]);
        return view('userProducts.success_payment');
    }

    public function cancelPayment($id, $cust_id, $amount)
    {
        // dd($id);
        return view('userProducts.cancel_payment');
    }

    public function userChangeQuantity(Request $request)
    {
        ShareUrlProduct::where(['id' => $request->id])->update(['quantity' => $request->count]);
        return true;
    }
}
