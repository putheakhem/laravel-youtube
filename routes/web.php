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

Route::get('/test', 'HomeController@showTest');
Route::get('/', 'HomeController@index');
Route::get('/aboutus', 'HomeController@aboutus');
Route::get('contactus', 'HomeController@contactus');
Route::get('portfolio', 'HomeController@portfulio');
Route::get('/posts', 'PostController@index');

