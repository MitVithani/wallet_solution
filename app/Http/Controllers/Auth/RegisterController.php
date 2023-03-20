<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function postRegistration(Request $request)
    {
        $this->validate($request,[
            'email'=>'unique:users',
            'phone_number'=>'unique:users',
        ]);
        $data['name'] = $request->name;
        $data['shop_name'] = $request->shop_name;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['company_name'] = $request->company_name;
        $data['tax_number'] = $request->tax_number;
        $data['address'] = $request->address;
        $data['city_name'] = $request->city_name;
        $data['bank_iban'] = $request->bank_iban;

        if(!empty($request->logo)){
            $image_name = time().uniqId().$request->logo->getClientOriginalName();
            $request->logo->move("public/logo", $image_name);
            $data['logo'] = $image_name;
        }
        User::create($data);


        return redirect(route('login'));
    }
}
