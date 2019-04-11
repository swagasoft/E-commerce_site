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
// pages controller
Route::get('/', 'pagesController@index')->name('index');
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/privacy_policy', 'pagesController@privacy_pl')->name('privacy_policy');
Route::get('/terms_and_connditions', 'pagesController@conditions')->name('conditions');
Route::post('/product', 'pagesController@product')->name('product');
Route::get('/fashion', 'pagesController@fashion')->name('fashion');
Route::get('/phone_and_tablet', 'pagesController@phone_tablet')->name('phone');
Route::get('/personal_services', 'pagesController@personal_services')->name('personal_services');
Route::get('/baby_toys', 'pagesController@baby_toys')->name('baby_toys');
Route::get('/computers', 'pagesController@computers')->name('computers');
Route::get('/kitchen', 'pagesController@kitchen')->name('kitchen');
Route::get('/electronics', 'pagesController@electronics')->name('electronics');

// product
Route::get('/product_view/{product}', 'ProductController@show')->name('product_view');


// cart section
Route::get('/cart_index', 'CartController@index')->name('cart_index');
Route::post('/cart', 'CartController@store')->name('cart_store');
Route::delete('/delete_cart/{product}', 'CartController@destroy')->name('cart_destory');
//empty cart content
Route::get('/empty', 'CartController@empty')->name('cart_empty');
Route::post('/cart/saveForLater/{product}', 'CartController@saveForlater')->name('saveForLater');
// save for letter function routes
Route::delete('/cart_saveForLetter/{product}', 'SaveForLaterController@empty')->name('empty_saveForLater');
Route::post('/cart/cart_saveForLater/{product}', 'SaveForLaterController@saveToCart')->name('saveToCart');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
