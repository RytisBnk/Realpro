<?php

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

Route::get('/test', function(){
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ordering routes

Route::get('/checkout', 'OrderController@create')->name('checkout');
Route::get('/orders/list', 'OrderController@showAll')->name('order.list');
Route::get('/order/{id}', 'OrderController@show');
Route::get('/order/{id}/edit', 'OrderController@edit');

Route::post('/order/store', 'OrderController@store');
Route::post('/order/update', 'OrderController@update');
Route::post('/order/delete', 'OrderController@destroy');

// administrative routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
