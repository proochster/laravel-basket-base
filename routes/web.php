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
    return view('home');
})->name('home');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.product');

Route::get('/basket', 'BasketController@index')->name('basket.index');
Route::post('/basket', 'BasketController@store')->name('basket.add');
Route::patch('/basket/{product}', 'BasketController@update')->name('basket.update');
Route::delete('/basket/{product}', 'BasketController@destroy')->name('basket.remove');
