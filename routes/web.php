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
Route::post('post-registration', 'Auth\RegisterController@postRegistration')->name('register.post');

Route::prefix('admin')->group(function() {
    Route::resource('users', 'Admin\UserController');
});
Route::resource('products', 'ProductController');
Route::post('change_quantity', 'ProductController@changeQuantity')->name('register.post');

Route::get('usersProducts/{id}', 'UsersProductController@usersProducts');
Route::get('usersProducts/payout/{id}', 'UsersProductController@usersProducts');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
