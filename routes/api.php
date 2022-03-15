<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware'=>['api'],'namespace'=>'App\Http\Controllers'],function(){
    Route::post('loginOtp','UserController@loginOtp');
    Route::post('verifyOtp','UserController@verifyOtp');
    Route::post('resendOtp','UserController@resendOtp');
    Route::post('addCategory','UserController@addCategory');
    Route::post('addProduct','UserController@addProduct');
    Route::post('getList','UserController@getList');
    Route::post('checkStatus','UserController@checkStatus');
    Route::post('forgot','UserController@forgot');
    Route::post('tokenVerification','UserController@tokenVerification');
    Route::post('reset','UserController@reset');
    Route::post('getAttendence','attendanceController@getAttendence');
    Route::post('punch','attenController@punch');
    //Route::post('payment','UserController@payment');
  
   // Route::get('get_profile','UserController@get_profile');
    //Route::post('update_profile','UserController@update_profile');
   // Route::post('add_cart','UserController@add_cart');
    //Route::post('update_cart','UserController@update_cart');
});
Route::group(['middleware'=>['auth:api'],'namespace'=>'App\Http\Controllers'],function(){
   Route::get('get_profile','UserController@get_profile');
   Route::post('update_profile','UserController@update_profile');
   Route::post('add_cart/{id}','UserController@add_cart');
   Route::get('getCartList','UserController@getCartList');
   Route::post('removeCart','UserController@removeCart');
   Route::post('addToWishlist','UserController@addToWishlist');
   Route::post('removeWishList','UserController@removeWishList');

  
});
