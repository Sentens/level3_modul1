<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/about', 'HomeController@about');

Route::get('/',       'ImagesController@index');
Route::get('/create', 'ImagesController@create');
Route::get('/show/{id}', 'ImagesController@show');
Route::get('/edit/{id}', 'ImagesController@edit');
Route::post('/store', 'ImagesController@store');
Route::post('/update/{id}', 'ImagesController@update');
Route::get('/delete/{id}', 'ImagesController@delete');