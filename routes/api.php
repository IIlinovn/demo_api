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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::group([
    'middleware' => 'api',
    'prefix' => 'products'
], function ($router) {
    Route::get('', function () {
        return new \App\Http\Resources\Product(\App\Product::all());
    });
    Route::get('{id}', function ($id) {
        return new \App\Http\Resources\ProductResource(\App\Product::find($id));
    });
    Route::post('', 'ProductController@create');
    Route::put('{id}', 'ProductController@update');
});
