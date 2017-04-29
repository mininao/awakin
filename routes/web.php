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

Route::get('/admin/order', 'Admin\CommandsController@index');
Route::post('/admin/updateorder', 'Admin\CommandsController@updateOrder');
// Admin CRUD Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('product', 'Admin\ProductCrudController');
});