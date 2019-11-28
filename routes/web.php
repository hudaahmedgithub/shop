<?php


Route::get('locale/{locale}',function ($locale){
	App::setLocale($locale);
	session()->put('locale', $locale);
	
    return redirect()->back();
		   });

/**
 * ----------------------------------------
 * |                                      |
 * |        Frontend Routes                |
 * |                                      |
 * ----------------------------------------
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/products', 'Frontend\ProductController');

Route::get('/product-details/{id}', 'Frontend\ProductController@productDetails');

Route::get('/shopping-cart', 'Frontend\CartController@index');

Route::put('/cart/update/{id}', 'Frontend\CartController@update');

Route::get('/cart/remove/{id}', 'Frontend\CartController@destroy');

Route::get('/cart/addItem/{id}', 'Frontend\CartController@addItem');

Route::get('/check-out', 'Frontend\CheckoutController@index');

Route::post('/formvalidate','Frontend\CheckoutController@address');

Route::get('/category/{id}','Frontend\ProductController@category');