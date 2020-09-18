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


// check authentication for backend
Route::middleware('auth')->group(function()
{

	Route::resource('/admin','AdminController');

	Route::resource('types','TypeController');

	Route::resource('townships','TownshipController');

	Route::resource('users','UserController');
});

// for frontenduser

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

