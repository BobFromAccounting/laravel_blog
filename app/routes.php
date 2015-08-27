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

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@doLogout');

Route::post('/signup', 'HomeController@doSignup');

Route::get('/about', 'HomeController@showAbout');

Route::get('/contact', 'HomeController@showContact');

Route::get('/', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rollad6/{guessNum}', 'HomeController@showdice');

Route::resource('/posts', 'PostsController');

Route::get('orm-test', function()
{
    $post1 = new Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->body  = 'It is super easy to create a new post.';
    $post1->save();

    $post2 = new Post();
    $post2->title = 'Post number two';
    $post2->body  = 'The body for post number two.';
    $post2->save();
});
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
