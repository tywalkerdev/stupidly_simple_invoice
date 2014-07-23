<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('/', 'ProductsController@store');
Route::get('/','ProductsController@index');
Route::get('/order/{id}/confirm', 'ProductsController@invoice');
Route::get('/order/{id}', 'ProductsController@order');