@extends('layouts.master')


@section('head')
        <meta name="description" content="portfolio">
        <title>My Portfolio</title>
@stop
@section('content')
    <!-- Beginning of Featurettes -->
    <div class="container">
        <h1 align="center">Tarek's Portfolio Pieces:</h1>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Mario's Escape Plan!</h2>
                <p class="lead">This is a re-imagining of the Whack-a-Mole javascript game. Built using only frontend technologies like CSS, JQuery, and vanilla JavaScript I was able to make this quite addicting game. Good luck helping Mario escape Bowser's dungeon. For those fans of contra, using the code (up, up, down, down, left, right, left, right, b, a, followed by the enter key) will provide an interesting surprise!</p>
                <a href="https://github.com/BobFromAccounting/whackamole"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
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
                <a href="https://github.com/BobFromAccounting/simplesimon.dev"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
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
                <a href="https://github.com/BobFromAccounting/codeup.dev/blob/master/public/animate_exercise.html"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
                
            </div>
            <div class="col-md-5">
                <a href="{{{ action('HomeController@showAnimate') }}}"><img class="featurette-image img-responsive center-block" src="/img/animate.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Having Fun with Animation Exercises</h2>
                <p class="lead">This is an Animation Exercise in which I used two images on a page, one hidden at a time, that is manipulateable through keyup event listeners using JQuery. Using the up, down, left, and right keys, you will be able to move the pokeball around on the screen. For those fans of contra, using the code (up, up, down, down, left, right, left, right, b, a, followed by the enter key) will provide an interesting surprise!</p>
                <a href="https://github.com/BobFromAccounting/codeup.dev/blob/master/public/jquery_animate_fun.html"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
                
            </div>
            <div class="col-md-5 col-md-pull-7">
                <a href="{{{ action('HomeController@showSnorlax') }}}"><img class="featurette-image img-responsive center-block" src="/img/snorlax.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Calculator!!!</h2>
                <p class="lead">This is an exercise in designing a digital calculator using JavaScript and HTML along with some twitter bootstrap for a more clean feel.</p>
                <a href="https://github.com/BobFromAccounting/codeup.dev/blob/master/public/calculator.html"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
                
            </div>
            <div class="col-md-5">
                <a href="{{{ action('HomeController@showCalculator') }}}"><img class="featurette-image img-responsive center-block" src="/img/calculator.png"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">AdNormal Oatmeal <small>Ad-Lister Project</small></h2>
                <p class="lead">This is a fully functional, data-driven Ad-Lister. Built using the LAMP stack, with JavaScript implementations, me and a partner were able to create an online marketplace where organizations can come together to create an online bake sale!! The linked image will go to a gallery where you can see some screenshots of the entire site.</p>
                <a href="https://github.com/AdnormalOatmeal/AdnormalLister"><img src="/img/GitHub.png"><p>Check it out on GitHub</p></a>
                
            </div>
            <div class="col-md-5 col-md-pull-7">
                <a href="{{{ action('HomeController@showAdnormalGallery') }}}"><img class="featurette-image img-responsive center-block" src="/img/AdnormalAdlister.png"></a>
            </div>
        </div>
    </div>
@stop