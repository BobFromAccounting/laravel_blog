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

	public function showMario()
	{
		return View::make('portfolio/mariosescapeplan');
	}

	public function showSimon()
	{
		return View::make('portfolio/simplesimon');
	}

	public function showAnimate()
	{
		return View::make('portfolio/animate-jquery');
	}

	public function showSnorlax()
	{
		return View::make('portfolio/animate-jquery-full');
	}

	public function showCalculator()
	{
		return View::make('portfolio/calculator');
	}

	public function showAdnormalGallery()
	{
		return View::make('portfolio/AdnormalGallery');
	}
}
