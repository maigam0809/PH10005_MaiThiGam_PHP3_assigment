<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/login','Auth\LoginController@getLoginForm')->name('auth.getLoginForm');
Route::post('admin/login','Auth\LoginController@login')->name('auth.login');
Route::get('admin/logout','Auth\LoginController@logout')->name('auth.logout');

Route::group(['middleware'=>['check_login']],function(){
    Route::group(['prefix' =>'admin','as' => 'admin.','namespace' =>'Admin','middleware'=>['check_admin']],function(){
        // 1. Users
        Route::group(['prefix' =>'users','as' => 'users.'],function(){
            Route::get('/','UserController@index')->name('index');
            Route::get('create','UserController@create')->name('create');
            Route::post('store','UserController@store')->name('store');
            Route::get('edit/{user}','UserController@edit')->name('edit');
            Route::post('update/{user}','UserController@update')->name('update');
            Route::get('/{user}','UserController@show')->name('show');
            Route::post('delete/{user}','UserController@delete')->name('delete');
        });

        // 2. Categories
        Route::group(['prefix' =>'categories','as' => 'categories.'],function(){
            Route::get('/','CategoryController@index')->name('index');
            Route::get('create','CategoryController@create')->name('create');
            Route::post('store','CategoryController@store')->name('store');
            Route::get('edit/{category}','CategoryController@edit')->name('edit');
            Route::post('update/{category}','CategoryController@update')->name('update');
            Route::get('/{category}','CategoryController@show')->name('show');
            Route::post('delete/{category}','CategoryController@delete')->name('delete');
        });

        // 2. Products
        Route::group(['prefix' =>'products','as' => 'products.'],function(){
            Route::get('/','ProductController@index')->name('index');
            Route::get('create','ProductController@create')->name('create');
            Route::post('store','ProductController@store')->name('store');
            Route::get('edit/{product}','ProductController@edit')->name('edit');
            Route::post('update/{product}','ProductController@update')->name('update');
            Route::get('/{product}','ProductController@show')->name('show');
            Route::post('delete/{product}','ProductController@delete')->name('delete');
        });

        // 2. Invoices
        Route::group(['prefix' =>'invoices','as' => 'invoices.'],function(){
            Route::get('/','InvoiceController@index')->name('index');
            Route::get('/{invoice}','InvoiceController@show')->name('show');
        });

        // 2. News
        Route::group(['prefix' =>'news','as' => 'news.'],function(){
            Route::get('/','NewController@index')->name('index');
            Route::get('create','NewController@create')->name('create');
            Route::post('store','NewController@store')->name('store');
            Route::get('edit/{newId}','NewController@edit')->name('edit');
            Route::post('update/{newId}','NewController@update')->name('update');
            Route::get('/{newId}','NewController@show')->name('show');
            Route::post('delete/{newId}','NewController@delete')->name('delete');
        });

        // 2. contacts
        Route::group(['prefix' =>'contacts','as' => 'contacts.'],function(){
            Route::get('/','ContactController@index')->name('index');
            Route::get('/{contact}','ContactController@show')->name('show');
            Route::post('delete/{contact}','ContactController@delete')->name('delete');

        });
    });
});

// Clients Fontend
Route::get('/', 'Client\HomeController@index')->name('/');
Route::get('/categories/{category}', 'Client\CateController@show')->name('categories.show');
Route::get('/products/{product}', 'Client\ProductController@index')->name('products.show');
Route::post('/comments', 'Client\AjaxController@index')->name('comments.index');

Route::get('/selling', 'Client\ProductController@selling')->name('products.selling');
Route::get('/discount', 'Client\ProductController@discount')->name('products.discount');
Route::get('/news', 'Client\NewController@index')->name('news.index');
Route::get('/contacts', 'Client\ContactController@index')->name('contacts.index');
Route::post('/contacts', 'Client\ContactController@store')->name('contacts.store');
Route::get('/search', 'Client\SearchController@index')->name('search');

// code Login
Route::get('login', 'Auth\LoginController@getLoginFormClient')->name('client.getLoginFormClient');
Route::post('login','Auth\LoginController@loginClient')->name('client.login');
Route::get('logout','Auth\LoginController@logoutClient')->name('client.logout');
// code register
Route::get('register','Auth\LoginController@register')->name('register');
Route::post('register','Auth\LoginController@store')->name('register.store');

// Code cart
Route::get('addToCart/{product?}', 'Client\CheckoutController@addProductToCart')->name('addToCart');
Route::get('cart', 'Client\CheckoutController@showCart')->name('cart');
Route::get('cart/delete/{product?}', 'Client\CheckoutController@deleteCart')->name('cart.delete');
Route::get('product/create/{product?}', 'Client\CheckoutController@createQuantityPro')->name('createToCart');
Route::get('product/update/{product?}', 'Client\CheckoutController@updateQuantityPro')->name('updateToCart');

Route::get('order', 'Client\CheckoutController@createOrder')->name('order');
Route::get('contactBill', 'Client\CheckoutController@contactBill')->name('billcontact');
