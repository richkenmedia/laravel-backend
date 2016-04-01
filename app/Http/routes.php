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

Route::group(['prefix' => 'user'], function () {
	Route::get('login', 'UserController@login');
	Route::post('login', 'UserController@loginCheck');
	Route::get('logout', 'UserController@logout');
	Route::get('signup', function () { return view('users.signup'); });
	Route::post('signup', 'UserController@signup');




	Route::get('password-reset/{id}/{token}', ['as' => 'reminders.edit', 'uses' => 'ReminderController@edit']);
	Route::post('password-reset/{id}/{token}', ['as' => 'reminders.update', 'uses' => 'ReminderController@update']);
	Route::get('forgot-password', 'ReminderController@create');
	Route::post('forgot-password', 'ReminderController@store');		
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function() { return view("admin.home"); });
    Route::get('groups', 'GroupController@index');
	Route::post('group/delete-all', 'GroupController@deleteAll');
	Route::resource('group', 'GroupController');
	Route::post('user/delete-all', 'UserController@deleteAll');
	Route::get('users', 'UserController@index');
	Route::resource('user', 'UserController');
});

