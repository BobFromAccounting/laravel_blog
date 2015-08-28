<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('/signup', 'HomeController@doSignup');

Route::get('/about', 'HomeController@showAbout');

Route::get('/contact', 'HomeController@showContact');

Route::get('/', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('/posts', 'PostsController');

// Entrust Users Routes

Route::get('users/index', 'UsersController@index');
Route::get('users/{users}', 'UsersController@show');
Route::get('users/{users}/edit', 'UsersController@edit');
Route::put('users/{users}', 'UsersController@update');
Route::patch('users/{users}', 'UsersController@update');


// Confide routes
Route::get('auth/create', 'AuthController@create');
Route::post('auth', 'AuthController@store');
Route::get('auth/login', 'AuthController@login');
Route::post('auth/login', 'AuthController@doLogin');
Route::get('auth/confirm/{code}', 'AuthController@confirm');
Route::get('auth/forgot_password', 'AuthController@forgotPassword');
Route::post('auth/forgot_password', 'AuthController@doForgotPassword');
Route::get('auth/reset_password/{token}', 'AuthController@resetPassword');
Route::post('auth/reset_password', 'AuthController@doResetPassword');
Route::get('auth/logout', 'AuthController@logout');
