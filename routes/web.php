<?php

//Frontend pages
Route::get('/','Page_Controller@index');
Route::get('/about','Page_Controller@about');
Route::get('/cart','Page_Controller@cart');
Route::get('/contact','Page_Controller@contact');
Route::get('/shop','Page_Controller@shop');
Route::get('/signup','Page_Controller@signup');
Route::get('/checkout','Page_Controller@checkout');
Route::get('/login','Page_Controller@login');
Route::get('/dashboard','Page_Controller@dashboard');

//Backend pages
Route::get('/clientel','Admin_controller@adminLogin');
Route::get('/adminDashboard','Admin_controller@adminDashboard');


//user account route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/crud','CrudsController');

