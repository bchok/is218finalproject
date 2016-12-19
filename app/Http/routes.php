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

Route::get('profile', 'UserController@profile');

Route::get('editprofile', 'UserController@editprofile');

Route::get('viewusers', 'UserController@viewusers');

Route::post('profile', 'UserController@update_pic');

Route::post('editprofile', 'UserController@editemail');

Route::auth();

Route::get('/home', 'HomeController@index');
