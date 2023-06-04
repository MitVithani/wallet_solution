<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }
            else if(auth()->user()->is_confirm == 0){
                auth()->logout();
                return redirect()->back()
                ->withInput()
                ->withErrors([
                    'password' => 'Confirmation link is sent to your registered email address. Please check spam folder also for verification mail.'
                ]);
            }
            else if(auth()->user()->status == "pending"){
                auth()->logout();
                return redirect()->back()
                ->withInput()
                ->withErrors([
                    'password' => 'Your Verification pending form admin side.'
                ]);
            }else if(auth()->user()->status == "deactive"){
                auth()->logout();
                return redirect()->back()
                ->withInput()
                ->withErrors([
                    'password' => 'Your account suspended by admin.'
                ]);
            }else if(auth()->user()->status == "active"){
                return redirect()->route('home');
            }
            else{
                auth()->logout();

                return redirect()->back()
                ->withInput()
                ->withErrors([
                    'password' => 'Some thing is worg please try again.'
                ]);
            }
        }else{
            return redirect()->back()
            ->withInput()
            ->withErrors([
                'password' => 'Your email and password do not match.'
            ]);
        }

    }
}
