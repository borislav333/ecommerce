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

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/products', 'ProductsController@index')->name('allProducts');
Route::get('/product/addToCart/{id}','ProductsController@addProductToCart')->name('AddToCardProduct');

Auth::routes();

Route::get('/cart', 'ProductsController@showCart')->name('cartProducts');
Route::get('/product/deleteItemFromCart/{id}','ProductsController@deleteItemFromCart')->name('DeleteItemFromCart');
