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

Route::get('/', 'WelcomeController@show')->middleware('guest');

Route::get('/home', 'HomeController@show')->middleware('auth');

Route::get('instagram', 'InstagramController@index')->middleware('auth');

Route::post('/social','UserSocialController@store')->middleware('auth');