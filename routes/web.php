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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'PhotoController@index');
Route::post('/insertRecords', 'PhotoController@insertRecords');
Route::post('/deleteRecords', 'PhotoController@deleteRecords');

Route::get('blog', '\Modules\Blog\Http\Controllers\BlogController@index');
Route::get('contact', '\Modules\Blog\Http\Controllers\ContactController@index');
