<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 1.Categories
Route::group(['prefix' =>'categories', 'namespace' =>'Api'] , function(){
    Route::get('/','CategoryController@index');
    Route::get('/{category}','CategoryController@show')->name('show');
    Route::put('/{category}','CategoryController@update');
    Route::delete('/{category}','CategoryController@delete');
});
// 1.Products
Route::group(['prefix' =>'products', 'namespace' =>'Api'] , function(){
    Route::get('/','ProductController@index');
    Route::get('/{product}','ProductController@show');
    Route::put('/{product}','ProductController@update');
    Route::delete('/{product}','ProductController@delete');
});
