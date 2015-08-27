<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showResume()
	{
	    return View::make('resume');
	}

	public function showPortfolio()
	{
	    return View::make('portfolio');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function showdice($guessNum)
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
	}
}
