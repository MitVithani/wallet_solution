<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Image;
// use Flash;
use Response;

class ProductController extends AppBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $products = Product::with('productImage')->where('user_id' , $userId)->get();
        return view('products.index')->with(['products' => $products, 'user_id' => $userId]);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        // dd('hy');
        return view('products.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['additional_details'] = $request->additional_details;
        $data['describe_item'] = $request->describe_item;
        $data['quantity'] = $request->quantity;
        $data['is_delivery'] = $request->is_delivery ?? 'off';
        $data['is_visible'] = $request->is_visible ?? 'off';
        $data['user_id'] = auth()->user()->id;
        $productData = Product::create($data);

        if(!empty($request->images)){
            foreach ($request->images as $key => $image) {
                $image_name = time().uniqId().$image->getClientOriginalName();
                $image->move("public/media/images", $image_name);
                $productDataid = $productData->id;
                Product_Image::create(['p_id' => $productDataid, 'image' => 'public/media/images/' . $image_name]);
            }
        }
        return redirect(route('products.index'));
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.edit')->with('user', $user);
    }

    public function update($id, Request $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }
        // dd($request->all());
        $data['name'] = $request->name;
        $data['shop_name'] = $request->shop_name;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        $data['company_name'] = $request->company_name;
        $data['tax_number'] = $request->tax_number;
        $data['address'] = $request->address;
        $data['city_name'] = $request->city_name;
        $data['bank_iban'] = $request->bank_iban;
        if(!empty($request->logo)){
            $logoname = time() . uniqid() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('logo'), $logoname);
            $request->request->remove('logo');
            $data['logo'] = $logoname;
        }

        User::where(['id' => $id])->update($data);
        // Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        // Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }

    public function changeQuantity(Request $request)
    {
        Product::where(['id' => $request->product_id])->update(['quantity' => $request->count]);
        return true;
    }
}
