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
use App\Task;

Auth::routes();

Route::get('/index/{channel}', 'indexcontroller@index')->name('index');
Route::get('/', 'IndexController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'TaskController@create')->name('create');
Route::post('/store', 'TaskController@store')->name('store');

Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return back();
})->name('delete');
