<?php

//Frontend pages

Route::get('/','Page_Controller@index');
Route::get('/about','Page_Controller@about');
Route::get('/contact','Page_Controller@contact');

//Sonjoy
Route::get('/cart','Product\UserProductController@cart')->name('users.products.cart');
Route::get('/shop','Product\UserProductController@index')->name('users.products.index');
Route::get('/products/{crud}','Product\UserProductController@show')->name('users.products.show');
Route::get('/products/add-to-cart/{id}', 'Product\UserProductController@addToCart')->name('users.products.add-to-cart');
// Route::patch('/products/update-cart', 'Product\UserProductController@update'); 
Route::delete('/products/remove-from-cart', 'Product\UserProductController@remove');
Route::get('checkout','Product\UserProductController@checkout')->name('users.products.checkout');

Route::get('orders', 'Order\UserOrderController@create')->name('users.orders.create');
//End Sonjoy

Route::get('/signup','Page_Controller@signup');
Route::get('/login','Page_Controller@login');
Route::get('/dashboard','Page_Controller@dashboard');

// Backend pages
// Route::get('/clientel','Admin_controller@adminLogin');
Route::get('/adminDashboard','Admin_controller@adminDashboard')->middleware('isAdmin')->name('adminDashboard');


//user account route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/crud','CrudsController');

// admin controller

// Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('isAdmin');

