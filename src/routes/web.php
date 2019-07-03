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
	return view('index');
});

Route::get('/igem', function () {
	return view('igem');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/activity', function () {
	return view('activity');
});

Route::get('/event', function () {
	return view('event');
});

Route::resource('posts', 'PostController');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
