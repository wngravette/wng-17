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

Route::get('/', 'FrontendController@index');
Route::get('/essay', 'EssayController@view');
Route::resource('posts', 'PostController');
Route::resource('essays', 'EssayController');
Route::get('essays/{id}/{slug}', 'EssayController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
