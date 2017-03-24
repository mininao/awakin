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


// Student routes

Route::get('/student/orders', 'student\OrderController@index');
Route::get('/student/orders/create', 'student\OrderController@create');
Route::get('/student/orders/{order}', 'student\OrderController@show');