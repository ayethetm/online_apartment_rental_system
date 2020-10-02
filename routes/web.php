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

	Route::get('/search','UserController@search');

	Route::get('/township_lanmadaw','ExtraController@township_lanmadaw')->name('township_lanmadaw');

	Route::get('/township_latha','ExtraController@township_latha')->name('township_latha');

	Route::get('/township_hlaing','ExtraController@township_hlaing')->name('township_hlaing');

	Route::get('/apartment','ExtraController@apartment')->name('apartment');

	Route::get('/condo','ExtraController@condo')->name('condo');

	Route::get('/minicondo','ExtraController@minicondo')->name('minicondo');

	Route::get('/house','ExtraController@house')->name('house');

	Route::get('/lowertohigherprice','ExtraController@lowertohigherprice')->name('lowertohigherprice');

	Route::get('/highertolowerprice','ExtraController@highertolowerprice')->name('highertolowerprice');

	// Route::get('/ads','ExtraController@ads')->name('ads');

	





