<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPasswordLink');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
        //     $message->to($request->email);
        //     $message->subject('Reset Password');
        // });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) {
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
        ->where([
            'email' => $request->email,
            'token' => $request->token
        ])
        ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }

    public function sendOtp(Request $request)
    {

        // dd($request->phone());
        // $id = "SANDBOX_ACC_ID";
        // $token = "SANDBOX_TOKEN";
        // $url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
        // $from = "+MAGICNUMBER";
        // $to = "+XXXXXXXXXX"; // twilio trial verified number
        // $body = "using twilio rest api from Fedrick";
        // $data = array (
        //     'From' => $from,
        //     'To' => $to,
        //     'Body' => $body,
        // );
        // $post = http_build_query($data);
        // $x = curl_init($url );
        // curl_setopt($x, CURLOPT_POST, true);
        // curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
        // curl_setopt($x, CURLOPT_POSTFIELDS, $post);
        // $y = curl_exec($x);
        // curl_close($x);
        // var_dump($post);
        // var_dump($y);

        //

        return 1;

    }

    public function verifyOtp(Request $request)
    {

    }
}
