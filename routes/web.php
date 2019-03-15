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

Route::get('/', 'DefaultController@index');
Route::get('/diri', 'DefaultController@diri');
Route::get('/blog', 'DefaultController@blog');
Route::get('/galeri', 'DefaultController@galeri');
Route::get('/resume', 'DefaultController@resume');
Route::get('/rancangan', 'DefaultController@rancangan');
Route::get('/javascript', 'DefaultController@javascript');
