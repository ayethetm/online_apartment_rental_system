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



	Route::get('dashboard', 'BackendController@dashboard')->
	name('dashboard');

	Route::resource('users','UserController');

	Route::resource('types','TypeController');

	Route::resource('townships','TownshipController');

	Route::resource('posts','PostController');


	Auth::routes();


	Route::get('/postview', 'ExtraController@index')->
	name('postview');

	Route::get('/postviewbyuser', 'ExtraController@user')->
	name('postviewbyuser');
	
	Route::get('/agencies', 'ExtraController@agency')->
	name('agency');





