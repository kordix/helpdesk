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


Auth::routes();

Route::get('/index/{channel}', 'TaskController@index')->name('index');
Route::get('/', 'TaskController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'TaskController@create')->name('create');
Route::post('/store', 'TaskController@store')->name('store');
