<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'SiteController@welcome');

Route::group(['namespace' => 'Auth'], function () {
	Route::get('auth/login', 'AuthController@getLogin');
	Route::post('auth/login', 'AuthController@postLogin');
	Route::get('auth/logout', 'AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'AuthController@getRegister');
	Route::post('auth/register', 'AuthController@postRegister');

	Route::get('password/reset/{token}', 'PasswordController@getReset');
	Route::post('password/reset', 'PasswordController@postReset');

});

Route::get('/category.html','ProductController@index');
Route::get('/category-{id}.html','ProductController@index');

Route::get('/product.html', function () {
	return view('sale.product');
});

Route::get('/cart.html', 'CartController@index');

Route::post('/cart/update','CartController@update');
Route::post('/cart/remove','CartController@remove');

Route::get('/checkout.html', 'SaleController@checkout');

Route::post('/ajax/region', 'AjaxController@region');


Route::get('/blog.html', function () {
	return view('blog.list');
});

Route::get('/blog/{id}.html', function () {
	return view('blog.view');
});

Route::get('/product/{id}.html', 'ProductController@view');

Route::get('/product2/{id}', function () {
	return view('product.view-full');
});

Route::group(['middleware' => 'auth', 'namespace' => 'User'], function () {
	Route::get('user/profile', 'ProfileController@show');
	Route::get('user/order', 'OrderController@show');
});