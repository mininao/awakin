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

use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Client routes

Route::get('/client/orders', 'client\OrderController@index');
Route::get('/client/orders/{order}', 'client\OrderController@show');

// Administrateur routes

Route::get('/administrateur/product', 'administrateur\ProductController@index');

Route::get('/administrateur/product/create', 'administrateur\ProductController@create');
Route::post('/administrateur/product', 'administrateur\ProductController@store');
Route::delete('/administrateur/product/{product}', 'administrateur\ProductController@destroy');
