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
Route::get('/filter/{id}','ProductController@show')->name('filter');


Route::get('/','HomeController@index')->name('home.index');

Route::get('/register','RegisterController@index')->name('register.index');
Route::post('/register','RegisterController@insert')->name('register.insert');

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/logout','LoginController@logout')->name('logout');

Route::group(['middleware'=>['sess']],function(){

		Route::group(['middleware'=>['AdminSess']],function(){
				Route::get('/admin','AdminController@index')->name('Admin.index');

		Route::get('/admin/addProduct','ProductController@add')->name('Product.addProudct');
		Route::post('/admin/addProduct','ProductController@store')->name('Product.store');

		Route::get('/admin/deleteProduct','ProductController@delete')->name('Product.delete');
		Route::post('/admin/deleteProduct','ProductController@deleteProductShow')->name('Product.deleteProductShow');
		Route::get('/admin/deleteProduct/Confirm/{id}','ProductDeleteController@destroy')->name('Product.destroy');

		Route::get('/admin/updateProduct','ProductController@update')->name('Product.update');
		Route::post('/admin/updateProduct','ProductController@UpdateProductShow')->name('Product.UpdateProductShow');
		Route::get('/admin/editProduct/{id}','ProductController@edit')->name('Product.edit');
		Route::post('/admin/editProduct/{id}','ProductController@editConfirm')->name('Product.editConfirm');

		Route::get('/admin/addCategory','ProductCategoryController@addCategory')->name('Category.addCategory');
		Route::post('/admin/addCategory','ProductCategoryController@insertCategory')->name('Category.insertCategory');


		Route::get('/admin/deleteCategory','ProductCategoryController@delete')->name('Category.delete');
		Route::get('/admin/deleteCategory/{id}','ProductCategoryController@destroy')->name('Category.destroy');

		Route::get('/admin/updateCategory','ProductCategoryController@update')->name('Category.update');
		Route::get('/admin/updateCategory/{id}','ProductCategoryController@edit')->name('Category.edit');
		Route::post('/admin/updateCategory/{id}','ProductCategoryController@editConfirm')->name('Category.editConfirm');

		Route::get('/admin/pendingOrder/','OrderController@PendingOrder')->name('Order.PendingOrder');
		Route::get('/admin/pendingOrder/deliver/{id}','OrderController@DeliverPendingOrder')->name('Order.DeliverPendingOrder');
		Route::get('/admin/deliverOrder/','OrderController@DeliveredOrder')->name('Order.DeliveredOrder');
		Route::get('/admin/showUsers/','AdminController@showUser')->name('Admin.showUser');
	});


	Route::get('/user','UserController@index')->name('user.index');
	Route::get('/user/placeOrder/','OrderController@index')->name('order.index');
	Route::post('/user/placeOrder/','OrderController@ConfirmOrder')->name('order.ConfirmOrder');
	Route::get('/user/pendingOrder/','UserController@PendingOrder')->name('user.PendingOrder');
	Route::get('/user/deliveredOrder/','UserController@DeliveredOrder')->name('user.DeliveredOrder');
	Route::get('/user/orderDetails/{id}','UserController@OrderDetails')->name('Order.Details');


});

Route::get('/user/cart/','CartController@show')->name('cart.show');
Route::get('/user/cart/{pid}','CartController@index')->name('cart.index');
Route::get('/search/{value}','ProductController@search')->name('search');
