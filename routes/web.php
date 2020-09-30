<?php

//Frontend pages

Route::get('/','Page_Controller@index');
Route::get('/about','Page_Controller@about');
Route::get('/contact','Page_Controller@contact');
Route::get('/Custom_Order','Page_Controller@customOrder');



//Sonjoy

//Cart
Route::get('/cart','Product\UserProductController@cart')->name('users.products.cart');


//Shop
Route::get('/shop','Product\UserProductController@index')->name('users.products.index');
//Products
Route::get('/products/{crud}','Product\UserProductController@show')->name('users.products.show');
Route::get('/products/add-to-cart/{id}', 'Product\UserProductController@addToCart')->name('users.products.add-to-cart');
Route::get('/products/update-cart/{id}/{quantity}', 'Product\UserProductController@update');
Route::delete('/products/remove-from-cart', 'Product\UserProductController@remove');


//Checkout
Route::get('checkout','Product\UserProductController@checkout')->name('users.products.checkout');
//User make order
Route::post('orders', 'Order\UserOrderController@create')->name('users.orders.create');
//User order history
Route::get('orders', 'Order\UserOrderController@index')->name('users.orders.index');
//User order show
Route::get('orders/{order}', 'Order\UserOrderController@show')->name('users.orders.show');
//User profile update
Route::post('update-profile/{user}', 'User\UserController@update')->name('users.profile.update');


//Admin all orders
Route::get('user-orders','Order\AdminOrderController@index')->middleware('isAdmin')->name('admin.orders.index');
Route::get('user-orders/{order}','Order\AdminOrderController@show')->middleware('isAdmin')->name('admin.orders.show');
Route::put('user-orders/{order}','Order\AdminOrderController@update')->middleware('isAdmin')->name('admin.orders.update');

//End Sonjoy


//Login and User Dashboard
Route::get('/signup','Page_Controller@signup');
Route::get('/login','Page_Controller@login')->name('login');
Route::get('/dashboard','Page_Controller@dashboard')->name('users.dashboard');

// Backend pages
// Route::get('/clientel','Admin_controller@adminLogin');
Route::get('/adminDashboard','Admin_controller@adminDashboard')->middleware('isAdmin')->name('adminDashboard');
Route::get('/order','Admin_controller@orderPage')->middleware('isAdmin')->name('order');



//user account route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/crud','CrudsController')->middleware('isAdmin')->name('*','crud');

// Route::resource('/orders','UserOrderController');
// admin controller
// Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('isAdmin');



//COUPON CONTROLLER
Route::get('/coupon','Coupon\adminCouponController@coupon')->name('coupon');
Route::post('/coupon-form','Coupon\adminCouponController@store')->name('coupon.form');
Route::post('/coupon-user-input','Coupon\adminCouponController@user_store')->name('coupon.userinput');
Route::get('/coupon-test','Coupon\adminCouponController@test')->name('test');



//CATEGORY CONTROLLER
// Route::get('/category','Category\categoryController@category')->name('category');

// Route::get('test',function(){
//     return App\Models\Category\productCategory::with('parent')->where('cat_p_id',0)->get(); 
// });
// Route::get('test2',function(){
//     return App\Models\Category\productCategory::with('child')->where('id',1)->get(); 
// });
Route::post('/categoryForm','Category\categoryController@store')->name('categoryForm');
Route::get('category','Category\categoryController@index')->name('category');
Route::get('/delete/{id}','Category\categoryController@destroy');


// DELIVERY CONTROLLER
Route::post('/delivery-form','Delivery\DeliveryChargeController@store')->name('deliverycharge');
// Route::get('/test','Delivery\DeliveryChargeController@show')->name('test');


// Route::get('/test', function(){
//     return view('test');
// });
Route::get('/test','Category\categoryController@test');
Auth::routes(['verify' => true]);

Route::post('ajax-request', 'Order\CustomOrderController@store');
Route::get('/req', 'Order\CustomOrderController@index');











