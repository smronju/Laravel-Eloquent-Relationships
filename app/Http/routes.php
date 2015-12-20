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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', ['as' => 'user::lists', 'uses' => 'UserController@index']);
    Route::get('id/{id}', ['as' => 'user::show', 'uses' => 'UserController@posts'])->where('id', '[0-9]+');
});

Route::group(['prefix' => 'post'], function(){
	Route::get('/', ['as' => 'post::lists', 'uses' => 'PostController@index']);
	Route::get('id/{id}', ['as' => 'post::show', 'uses' => 'PostController@user'])->where('id', '[0-9]+');
});
