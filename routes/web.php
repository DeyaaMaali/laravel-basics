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

Route::get('/deyaa', "testController@index");
//Route::get('/products', "testController@deyaa");


Route::get('/about', function () {
    return "about";
});

Route::get('/home', function () {
    return "test";
});

Route::get('/a', function () {
    return view("test2");
});

Route::get('/category/{id}', function ($idaaa) {
    return $idaaa;
});

Route::get("/products", "ProductController@index");

