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





Route::get('/', 'AdsController@index');

Route::get('/adverts/create', 'AdsController@create');

Route::post('/adverts/create', 'AdsController@store');

Route::get('/adverts/{id}', 'AdsController@show');