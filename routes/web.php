<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function(){
	Route::group(['prefix' => 'group'], function(){
		Route::get('/', 'GroupController@index');
		Route::get('create', 'GroupController@create');
		Route::post('store', 'GroupController@store');
		Route::get('{group}/edit', 'GroupController@edit');
		Route::patch('{group}', 'GroupController@update');
		Route::delete('{group}/delete', 'GroupController@destroy');
	});
});
