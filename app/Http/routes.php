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

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
		Route::post('/register', 'UserController@store');


Route::get('/', function(){
	if(!Auth::check())
		return redirect('auth/login'); 
	else return redirect('home');
});
Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
		Route::get('/home','UserController@index');
		Route::get('/perfil', 'UserController@showPerfil');
		Route::get('/perfilUs/{id}', 'UserController@showPerfilUs');
		Route::post('/updateU', 'UserController@update');
		Route::post('/search', 'UserController@search');
		Route::get('/deleteUser', 'UserController@destroy');
		Route::get('/area', 'QuizController@index');
		Route::post('/quizzes', 'QuizController@show');
		Route::get('/quizzesArea/{idQ}', 'QuizController@showQuiz');
		Route::get('/newQuiz', 'QuizController@create');
		Route::post('/storeQuiz', 'QuizController@storeQuiz');
		Route::post('/storeAnswer', 'QuizController@storeAnswer');
		Route::get('/validateQuiz/{id}', 'QuizController@validarQuiz'); 
		Route::post('/validateQuizUp', 'QuizController@validarQuizUpdate');	
		Route::get('/ranking', 'UserController@ranking');
		Route::post('/submeterQuiz', 'QuizController@corrigeQuiz');
		Route::get('/post/{idP}', 'PostController@show');
		Route::get('/postCreate', 'PostController@create');
		Route::post('/postStore', 'PostController@store');
		Route::get('/newChallenge', 'ChallengeController@index');
		Route::post('/storeChallenge', 'ChallengeController@store');
		Route::get('/areaChallenge', 'ChallengeController@show');
		Route::get('/desafiosArea/{idD}', 'ChallengeController@showDesafio');
		Route::post('/submeterDesafio', 'ChallengeController@storeChallengeAnswer');
		Route::get('/validateDesafio/{idD}', 'ChallengeController@showDesafioCorrige');
		Route::get('/declineDesafio/{idD}', 'ChallengeController@ChallengeErrado');
		Route::get('/acceptDesafio/{idD}', 'ChallengeController@CorrigeChallenge');


});
