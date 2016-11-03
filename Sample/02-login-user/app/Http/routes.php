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


Route::get('/', 'UserController@register');
Route::get('register', 'UserController@register');
Route::post('signup', 'UserController@signup');
Route::get('login', 'UserController@login');
Route::post('signin', 'UserController@signin');
Route::get('signout', 'UserController@signout');
Route::get('animal', 'AnimalController@index');
