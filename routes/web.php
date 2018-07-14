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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'OrderController@create')->name('checkout');

// ordering routes

    Route::get('/order/list', 'OrderController@showAll')->name('order.list');
    Route::get('/order/{id}', 'OrderController@show');
    Route::get('/order/{id}/edit', 'OrderController@edit');

    Route::post('/order', 'OrderController@store');
    Route::put('/order/update', 'OrderController@update');
    Route::delete('/order/delete', 'OrderController@destroy');

Route::post('/upload', ['as' => 'upload', 'uses' => 'ImageController@upload']);
Route::post('/plan', 'OrderController@storeSelectedPlan')->name('plan');