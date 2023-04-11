<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::post('post-login', 'Auth\LoginController@postLogin')->name('login.post');
Route::get('login-user', 'Auth\LoginController@showLoginForm')->name('login-user');
Route::post('post-registration', 'Auth\RegisterController@postRegistration')->name('register.post');

Route::get('forget-password', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');
Route::get('reset-password/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::prefix('admin')->group(function() {
    Route::resource('users', 'Admin\UserController');
    Route::post('change_status', 'Admin\UserController@changeStatus');
});
Route::resource('products', 'ProductController');
Route::post('change_quantity', 'ProductController@changeQuantity');
Route::post('clear_quantity', 'ProductController@clearQuantity');
Route::post('change_discount', 'ProductController@changeDiscount');
Route::post('save_link', 'ProductController@saveLink');

Route::post('send_otp', 'Auth\ForgotPasswordController@sendOtp')->name('send_otp');
Route::post('verify_otp', 'Auth\ForgotPasswordController@verifyOtp')->name('verify_otp');
Route::post('change_password', 'Auth\ForgotPasswordController@changePassword')->name('change_password');

Route::get('usersProducts/{id}', 'UsersProductController@usersProducts');
Route::get('usersProducts/payout/{id}', 'UsersProductController@usersProductspayout');
Route::get('usersProducts/check_out/{id}', 'UsersProductController@usersProductspayout');
Route::get('checkoutNow/{id}', 'UsersProductController@usersProductspayout');

Route::post('save_customer', 'UsersProductController@saveCustomer');
Route::post('send_payment', 'UsersProductController@sendPayment');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    // dd('good');
    // return what you want
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
