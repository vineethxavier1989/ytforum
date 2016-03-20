<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(array('before'=>'guest'), function()
{
Route::get('/user/create','UserController@getCreate');
Route::get('/user/login','UserController@getLogin');
});


Route::group(['middleware' => ['web']], function () {
    //
});
