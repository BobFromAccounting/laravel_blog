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
Route::get('/portfolio/AdnormalGallery', 'HomeController@showAdnormalGallery');

// Posts Routes
Route::get('/posts/manage', 'PostsController@getManage');
Route::get('/posts/list', 'PostsController@getList');

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
Route::get('auth/logout', 'AuthController@logout');
Route::get('users/confirm/{code}', 'AuthController@confirm');
Route::get('users/forgot_password', 'AuthController@forgotPassword');
Route::post('users/forgot_password', 'AuthController@doForgotPassword');
Route::get('users/reset_password/{token}', 'AuthController@resetPassword');
Route::post('users/reset_password', 'AuthController@doResetPassword');
