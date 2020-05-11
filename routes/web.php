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

Route::get('/', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/add-to-cart/{id}', 'OrdersController@getAddToCart');
Route::get('/shopping-cart', 'OrdersController@getCart');
Route::get('/reduce-one/{id}', 'OrdersController@reduceOne');
Route::get('/reduce-all/{id}', 'OrdersController@reduceAll');