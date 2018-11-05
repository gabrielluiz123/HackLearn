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

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
		Route::post('/register', 'UserController@store');


Route::get('/', function(){
	if(!Auth::check())
		return redirect('auth/login'); 
	else return redirect('home');
});
Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
		Route::get('/home','UserController@show');
		Route::get('/perfil/{id}', 'UserController@showPerfil');
		Route::post('/updateU', 'UserController@update');

});