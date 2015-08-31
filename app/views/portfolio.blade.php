@extends('layouts.master')


@section('head')
        <meta name="description" content="portfolio">
        <title>My Portfolio</title>
@stop
@section('content')
    <!-- Beginning of Featurettes -->
    <div class="container">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Mario's Escape Plan!</h2>
                <p class="lead">This is a re-imagining of the Whack-a-Mole javascript game. Built using only frontend technologies like CSS, JQuery, and vanilla JavaScript I was able to make this quite addicting game. Good luck helping Mario escape Bowser's dungeon. For those that remember Contra, there is a special prize in store...</p>
            </div>
            <div class="col-md-5">
                <a href="{{{ action('HomeController@showMario') }}}"><img class="featurette-image img-responsive center-block" src="/img/mariosescapeplan.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">
        
        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Scary Simon.</h2>
                <p class="lead">Another take on a classic, introducing Scary Simon. A simple simon game, built using front end technologies: CSS, JavaScript, and JQuery. See how far you can get, or play on an expert mode which only shows you the last move Simon chose. Last as long as you can, before simon comes to collect your ashes...</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <a href="{{{ action('HomeController@showSimon') }}}"><img class="featurette-image img-responsive center-block" src="/img/simplesimon.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Animation Exercise</h2>
                <p class="lead">This is an Animation Exercise I created using JQuery to manipulate a generic image on a page. </p>
            </div>
            <div class="col-md-5">
                <a href="{{{ action('HomeController@showAnimate') }}}"><img class="featurette-image img-responsive center-block" src="/img/animate.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
@stop