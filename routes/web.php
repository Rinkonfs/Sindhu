<?php

Route::get('/','mController@index');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


