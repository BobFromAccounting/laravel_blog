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

Route::get('/', 'HomeController@showhome');

Route::get('/resume', 'HomeController@showresume');

Route::get('/portfolio', 'HomeController@showportfolio');

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
