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

//Route::get('/', function () {
//    return view('welcome');
//});

// Home Page Route
Route::get('/', 'HomeController@home');
Route::get('/products', 'ProductsController@index');
Route::get('/suppliers', 'SuppliersController@index');
Route::get('/buyers', 'BuyersController@index');
Route::get('/add_products', 'ProductsController@create');
Route::get('/add_suppliers', 'SuppliersController@create');
Route::get('/add_buyers', 'BuyersController@create');
Route::get('/add_inbound', 'InboundController@create');

//Post Method
Route::post('/add_products', 'ProductsController@store');
Route::post('/add_suppliers', 'SuppliersController@store');
Route::post('/add_buyers', 'BuyersController@store');
Route::post('/add_inbound', 'InboundController@store');
