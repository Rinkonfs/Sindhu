<?php

 Route::get('/','mController@index');

Route::get('/about','mController@about');
Route::get('/cart','mController@cart');
Route::get('/contact','mController@contact');
Route::get('/shop','mController@shop');
Route::get('/slogin','mController@login');
Route::get('/clientel','mController@adminLogin');
Route::get('/signup','mController@signup');
Route::get('/checkout','mController@checkout');
Route::get('/dashboard','mController@dashboard');


Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::get('/home', 'mController@index')->name('home');


Route::resource('crud','CrudsController');

// Route::get('/home', 'HomeController@index')->name('home');
