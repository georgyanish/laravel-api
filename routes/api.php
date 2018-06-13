<?php

use Illuminate\Http\Request;

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


Route::get('/categories','CategoryController@getCategories');

Route::get('/products','ProductController@getProducts');

Route::get('/products/{id}','ProductController@getById');

Route::post('/products','ProductController@insertProduct');

Route::put('/products/{id}','ProductController@updateProduct');

Route::delete('/products/{id}','ProductController@deleteProduct');