<?php

Route::get('/','mController@index')->name('home');
Route::get('/about','mController@about');
Route::get('/cart','mController@cart');
Route::get('/contact','mController@contact');
Route::get('/shop','mController@shop');
Route::get('/login','mController@login');
Route::get('/clientel','mController@adminLogin');
Route::get('/signup','mController@signup');
Route::get('/checkout','mController@checkout');
Route::get('/dashboard','mController@dashboard');

Route::get( 'test', 'mController@test');
Route::get( 'test-add-product', 'Product\ProductController@create');
Route::post( 'test-add-product', 'Product\ProductController@store');
Route::get( 'test-all-product', 'Product\ProductController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


