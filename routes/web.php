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

Auth::routes();

Route::get('/home', 'HomeController@index');

// login routes

Route::get('/redirect', 'Auth\LoginController@redirect');
Route::get('/callback', 'Auth\LoginController@callback');

// Student routes

Route::get('/student', 'student\StudentController@dashboard');
Route::get('/student/orders', 'student\OrderController@index');
Route::get('/student/orders/create', 'student\OrderController@create');
Route::get('/student/orders/products', 'student\OrderController@listProducts');
Route::get('/student/orders/{order}', 'student\OrderController@show');
Route::post('/student/orders', 'student\OrderController@store');


// Administrateur routes

Route::get('/administrateur/product', 'administrateur\ProductController@index')->name('indexDashboardElior');
Route::get('/administrateur/product/create', 'administrateur\ProductController@create')->name('createProduct');
Route::post('/administrateur/product', 'administrateur\ProductController@store');
Route::delete('/administrateur/product/{product}/delete', 'administrateur\ProductController@destroy')->name('deleteProduct');
Route::get('/administrateur/product/{product}/edit', 'administrateur\ProductController@edit')->name('editProduct');
Route::put('/administrateur/product/{product}/update', 'administrateur\ProductController@update')->name('updateProduct');

Route::get('/administrateur/commands', 'administrateur\CommandsController@index');
