<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products/categories', 'ProductCategoryController@index');
Route::get('products/categories/{id}', 'ProductCategoryController@show');
Route::put('products/categories/{id}', 'ProductCategoryController@update');
Route::post('products/categories', 'ProductCategoryController@store');
Route::delete('products/categories/{id}', 'ProductCategoryController@destroy');

Route::get('products', function (){
    return new \App\Http\Resources\Product(\App\Product::all());
});
Route::get('products/{id}', function ($id) {
    return new \App\Http\Resources\ProductResource(\App\Product::find($id));
});
Route::post('products', 'ProductController@create');
Route::put('products', 'ProductController@update');

Route::get('tasks', 'TaskController@index');
Route::get('tasks/{id}', 'TaskController@show');
Route::put('tasks', 'TaskController@update');


