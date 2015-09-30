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

Route::get('/', function () { return view('frontend.home'); });

Route::group(['prefix' => 'auth'], function () {
	Route::get('login', 'Auth\AuthController@login');

	Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@loginCheck']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::any('/', function(){ 
		return view("admin.default");
	});
    Route::get('users', function(){  
    	return "testing"; 
    });
});