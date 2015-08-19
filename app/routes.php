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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return 'This is my resume!';
});

Route::get('/portfolio', function()
{
    return 'This is my Portfolio!';
});

Route::get('/rollad6/{guessNum}', function($guessNum)
{   
    $randNum = mt_rand(1, 6);

    if ($guessNum == $randNum) {
        $response = "Success!";
    } else {
        $response = "Sorry, not sorry. Pray to the dice gods.";
    }
    $data = array(
        'guessNum' => $guessNum,
        'randNum'  => $randNum,
        'response' => $response
    );
    return View::make('roll-dice')->with($data);
});
