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

Route::get('/checkout/old', function(){
    return view('checkout');
});
Route::get('/', function () {
    return view('nav.homepage');
})->name('index');
Route::get('/contact', function(){
    return view('nav.contact');
})->name('contact');
Route::get('/features', function(){
    return view('nav.features');
})->name('features');
Route::get('/about', function(){
    return view('nav.about');
})->name('about');
Route::get('/plans', function(){
    return view('nav.plans');
})->name('plans');;
Route::get('/faq', function(){
    return view('faq');
})->name('faq');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/terms', function(){
    return view('terms');
});
Route::get('/accept', function(){
    return view('accept');
});
Route::get('/cancel', function(){
    return view('cancel');
});

Route::get('/redirect', 'PayseraController@redirect')->name('redirect');
Route::get('/callback', 'PayseraController@callback')->name('callback');

// ordering routes
    Route::get('/checkout', 'OrderController@create')->name('checkout');

    Route::get('/order/list', 'OrderController@showAll')->name('order.list');
    Route::get('/order/{id}', 'OrderController@show');
    Route::get('/order/{id}/edit', 'OrderController@edit');

    Route::post('/order', 'OrderController@store')->name('order.store');
    Route::put('/order/update', 'OrderController@update');
    Route::delete('/order/delete', 'OrderController@destroy');

    //Route::get('/invoicetest', 'InvoiceTestController@createInvoice')->name('invoice.test');

Route::post('/upload', ['as' => 'upload', 'uses' => 'ImageController@upload']);
Route::get('/plan/{id}', 'OrderController@storeSelectedPlan')->name('plan');

Route::get('/images/{filename}', 'ImageController@retrieve')->name('image.retrieve');
Route::get('/terms', function(){
    return view('terms');
})->name('terms');
Route::get('/privacy', function(){
    return view('privacy');
})->name('privacy');