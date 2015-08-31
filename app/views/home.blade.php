@extends('layouts.master')

@section('head')
	<meta name="description" content="homepage">
	<title>Home</title>
	<style type="text/css">
		body {
	        background: url('/img/stormyroad.jpg') top left no-repeat;
	        background-size: cover;
	        background-attachment: fixed;
	        height: 100%;
	        width: 100%;
	    }
	    #setopacity {
	    	opacity: .7;
	    }
	</style>
@stop
@section('content')
	<div class="container addpadd col-md-offset-2 col-md-8">
		<div class="panel" id="setopacity">
        	<h1 align="center">Tarek S Hafez</h1>
            <div class="panel-body">
                <div>
                	<p>
                		Hello, I am that guy from the thing. I am a Full Stack Web Developer, currently located in San Antonio, Texas. I specialize in the LAMP/LEMP stack incorporating JavaScript and JQuery, amoung other technologies into my development toolkit.
                	</p>
                	<p>
                		It is my hope that you will find something entertaining on my site, that will get you either interested in learning more about myself and my work. Or maybe you might learn something you didn't know before. Either way, I want this to be an enjoyable experience for all.
                	</p>
                </div>
            </div>
        </div>
    </div>

@stop