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
// Route::get('/show', 'HomeController@show' );
// Route::get('/create', 'HomeController@create' );
// Route::get('/store', 'HomeController@store' );
// Route::get('/update', 'HomeController@update' );
// Route::get('/delete', 'HomeController@delete' );

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');
