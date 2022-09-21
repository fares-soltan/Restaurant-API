<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;


//All api here must be auth
Route::group(['middleware'=>'api'],function (){

    // API USERS
    Route::get('get-users','App\Http\Controllers\Api\UsersController@index');
    Route::post('get-user-byid','App\Http\Controllers\Api\UsersController@getUserById');
    Route::post('create-user','App\Http\Controllers\Api\UsersController@createUser');
    Route::post('change-user-status','App\Http\Controllers\Api\UsersController@changeStatus');
    Route::post('change-user-password','App\Http\Controllers\Api\UsersController@changePassword');

    // API CART
    Route::get('get-cart','App\Http\Controllers\Api\CartController@index');
    Route::post('get-cart-byuserid','App\Http\Controllers\Api\CartController@getCartById');
    Route::post('add-to-cart','App\Http\Controllers\Api\CartController@addToCart');
    Route::post('delete-from-cart','App\Http\Controllers\Api\CartController@deleteFromCart');
    Route::post('delete-cart-by-userid','App\Http\Controllers\Api\CartController@deleteAllFromCart');




    // API MEALS
    Route::get('get-meals','App\Http\Controllers\Api\MealsController@index');
    Route::post('get-meal-byCat','App\Http\Controllers\Api\MealsController@getmealById');

    // API TABLES
    Route::get('get-tables','App\Http\Controllers\Api\TableController@index');
    Route::post('get-table-byid','App\Http\Controllers\Api\TableController@getTableById');
    Route::post('add-to-table','App\Http\Controllers\Api\TableController@addToTable');
        Route::post('delete-table-by-userid','App\Http\Controllers\Api\TableController@deleteAllFromTable');
        Route::post('get-table-by-table-number','App\Http\Controllers\Api\TableController@getTableByTbNum');


    // API COUPONS
    Route::get('get-coupons','App\Http\Controllers\Api\CouponsController@index');
    Route::post('addCoupon','App\Http\Controllers\Api\CouponsController@addCoupon');

    // API ORDERS
    Route::get('get-orders','App\Http\Controllers\Api\OrdersController@index');
    Route::post('get-order-by-user-id','App\Http\Controllers\Api\OrdersController@getOrderByuserId');
    Route::post('add-to-order','App\Http\Controllers\Api\OrdersController@addToOrder');
    Route::post('delete-order-by-id','App\Http\Controllers\Api\OrdersController@deleteOrder');
    Route::post('delete-order-by-table-number','App\Http\Controllers\Api\OrdersController@deleteOrderBytablenumber');
    Route::post('get-order-by-table-number','App\Http\Controllers\Api\OrdersController@getOrderBytablenumber');

        // API Casher
        Route::get('get-casher','App\Http\Controllers\Api\CasherController@index');
        Route::post('get-casher-by-user-id','App\Http\Controllers\Api\CasherController@getOrderByuserId');
        Route::post('add-to-casher','App\Http\Controllers\Api\CasherController@addToOrder');
        Route::post('delete-casher-by-id','App\Http\Controllers\Api\CasherController@deleteOrder');
        Route::post('delete-casher-by-table-number','App\Http\Controllers\Api\CasherController@deleteOrderBytablenumber');
        Route::post('get-casher-by-table-number','App\Http\Controllers\Api\CasherController@getOrderBytablenumber');
    

    // API ALL ORDERS
    Route::get('get-allorders','App\Http\Controllers\Api\AllordersController@index');
    Route::post('get-allorder-by-user-id','App\Http\Controllers\Api\AllordersController@getOrderByuserId');
    Route::post('add-to-allorder','App\Http\Controllers\Api\AllordersController@addToOrder');


});

