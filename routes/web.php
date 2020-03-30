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

Route::get('/', 'PagesController@index');

Route::get('/hello', function () {
    return '<h1>Hello world</h1>';
});

//Routet mitkä löytyvät pages controllerilta
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'User is: '.$name.' with an id of: '.$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');

Route::resource('kuuset', 'KuusiController');

Route::resource('orders', 'OrderController');

//Route::get('orders/create/{id}','OrderController')->name('order_id');

//Route::get('/orders/{id}', 'OrderController@orderwithid');
