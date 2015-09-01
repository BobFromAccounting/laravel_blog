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

// Home Controller Routes
Route::post('/signup', 'HomeController@doSignup');
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact', 'HomeController@showContact');
Route::get('/', 'HomeController@showHome');
Route::get('/resume', 'HomeController@showResume');

// Portfolio Routes
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/portfolio/mariosescapeplan', 'HomeController@showMario');
Route::get('/portfolio/scarysimon', 'HomeController@showSimon');
Route::get('/portfolio/animate-jquery', 'HomeController@showAnimate');
Route::get('/portfolio/animate-jquery-full', 'HomeController@showSnorlax');
Route::get('/portfolio/calculator', 'HomeController@showCalculator');

// Posts Routes
Route::resource('/posts', 'PostsController');

// Entrust Users Routes
Route::get('users/{users}/user', 'UsersController@role');
Route::put('users/{users}/role', 'UsersController@editRole');
Route::patch('users/{users}/role', 'UsersController@editRole');

Route::resource('/users', 'UsersController');

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
