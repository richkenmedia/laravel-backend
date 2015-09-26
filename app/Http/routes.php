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

Route::get('auth/login', 'Auth\AuthController@login');

Route::resource('auth', 'Auth\AuthController');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::any('/', function(){ 
		return view("admin.default");
	});
    Route::get('users', function(){  
    	return "testing"; 
    });
});