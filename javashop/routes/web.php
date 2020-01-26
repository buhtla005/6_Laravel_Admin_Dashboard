<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', function () {
    return view('welcome');
});
*/
//DASHBOARD
Route::get('/', 'DashboardController@index');

//PRODUCTS
Route::resource('/products', 'ProductController');

//ORDERS
Route::resource('/orders', 'OrderController');
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

//USERS
Route::resource('/users','UsersController');
