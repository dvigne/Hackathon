<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
    return view('welcome');
	});
});

Route::auth();

Route::group(['middlewware' => ['web']], function () {
	Route::get('/dashboard', 'dashboard@index')->middleware('auth');
	Route::post('/dashboard', 'dashboard@search')->middleware('auth');
	Route::post('/dashboard/search', 'dashboard@search')->middleware('auth');
	Route::get('/dashboard/profile', 'dashboard@profile')->middleware('auth');
	Route::get('/dashboard/profile/edit', 'dashboard@prof_edit')->middleware('auth');
	Route::post('/dashboard/profile/edit', 'dashboard@prof_edit_save')->middleware('auth');
	Route::get('/dashboard/mail', 'dashboard@mail')->middleware('auth');
});