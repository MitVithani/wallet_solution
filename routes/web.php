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
Route::get('/', 'HomeController@userHome')->name('userhome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::post('post-login', 'Auth\LoginController@postLogin')->name('login.post');
Route::get('login-user', 'Auth\LoginController@showLoginForm')->name('login-user');
Route::post('post-registration', 'Auth\RegisterController@postRegistration')->name('register.post');

//for the user_login and register_login
Route::get('user_login', 'Auth\LoginController@show_user_login')->name('user_login');
Route::get('user_register', 'Auth\RegisterController@show_user_register')->name('user_register');
Route::post('post_user_register', 'Auth\RegisterController@post_user_registration')->name('post_user_registration');
Route::post('post_user_login', 'Auth\LoginController@post_user_login')->name('post_user_login');

Route::get('forget-password', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');
Route::get('reset-password/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::prefix('admin')->group(function() {
    Route::resource('users', 'Admin\UserController');
    Route::resource('ShareLink', 'Admin\ShareLinkController');
    Route::post('change_status', 'Admin\UserController@changeStatus');
});

Route::get('mail', 'UsersProductController@getVerifyMail');

Route::resource('products', 'ProductController');
Route::post('change_quantity', 'ProductController@changeQuantity');
Route::post('clear_quantity', 'ProductController@clearQuantity');
Route::post('change_discount', 'ProductController@changeDiscount');
Route::post('save_link', 'ProductController@saveLink');
Route::post('add_delivary_charges', 'ProductController@addDelivaryCharges');
Route::post('remove_img', 'ProductController@removeImg');

Route::post('send_otp', 'Auth\ForgotPasswordController@sendOtp')->name('send_otp');
Route::post('verify_otp', 'Auth\ForgotPasswordController@verifyOtp')->name('verify_otp');
Route::post('change_password', 'Auth\ForgotPasswordController@changePassword')->name('change_password');

Route::get('usersProducts/{id}', 'UsersProductController@usersProducts');
Route::get('usersProducts/payout/{id}', 'UsersProductController@usersProductspayout');
Route::get('usersProducts/check_out/{id}', 'UsersProductController@usersProductspayout');
Route::get('checkoutNow/{id}', 'UsersProductController@usersProductspayout');
Route::post('user_change_quantity', 'UsersProductController@userChangeQuantity');

Route::get('edit/{id}', 'ProductController@edit');
Route::get('delete/{id}', 'ProductController@delete');
Route::post('productUpdate', 'ProductController@productUpdate')->name('productUpdate');
// Route::get('edit/{id}', 'ProductController@edit');

Route::post('save_customer', 'UsersProductController@saveCustomer');
Route::post('send_payment', 'UsersProductController@sendPayment');
Route::get('successPayment/{id}/{cust_id}/{amount}', 'UsersProductController@successPayment');
Route::get('cancelPayment/{id}/{cust_id}/{amount}', 'UsersProductController@cancelPayment');

Route::get('successPayment/{cust_id}/{amount}', 'UsersProductController@successPayment');
Route::get('cancelPayment/{cust_id}/{amount}', 'UsersProductController@cancelPayment');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    // dd('good');
    // return what you want
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route for allseller apge
Route::get('all_seller','SellerController@index')->name('all_seller');

//route for product page
Route::get('product_list/{id}','UsersProductController@product_list')->name('product_list');

//route for product detail page
Route::get('product_detail/{pid}','UsersProductController@product_detail')->name('product_detail');

//footer page
Route::get('term_condition','FooterController@show_term_condition')->name('term_condition');
Route::get('aboutus','FooterController@show_aboutus')->name('aboutus');
Route::get('privacy','FooterController@show_privacy')->name('privacy');
Route::get('prohibited_ausinesses_and_activities','FooterController@show_activities')->name('activities');
Route::get('acceptable_use_policy','FooterController@show_acceptable_use_policy')->name('acceptable_use_policy');

//cart page
Route::get('cart','CartController@cart_list')->name('cart_list');
Route::post('cart','CartController@addToCart')->name('cart_store');
Route::get('cart/removeFromCart/{id}','CartController@removeFromCart')->name('removeFromCart');
Route::post('cart/updateQuantity','CartController@updateQuantity')->name('cart_updateQuantity');

//order confirmed
Route::get('/order_confirmed', 'CheckoutController@order_confirmed')->name('order_confirmed');
Route::get('/order_history', 'CheckoutController@order_history')->name('order_history');
Route::get('/order_history/detail', 'CheckoutController@order_detail')->name('order_detail');


//profile
Route::get('/profile', 'UserController@show')->name('user_profile');
Route::post('/user/update-profile', 'UserController@userProfileUpdate')->name('user_profile_update');

//Address
Route::post('/address', 'AddressController@store')->name('store_address');
Route::post('/address/edit', 'AddressController@edit')->name('edit_address');



