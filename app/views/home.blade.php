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
	    .textcolor {
	    	color: black;
	    }
	</style>
@stop
@section('content')
	<div class="container addpadd">
		<h1 class="textcolor">Always</h1>
		<h2 class="textcolor">My mind wanders here, to when I was alone.</h2>
		<p class="textcolor col-md-4">
			<strong>What was I to learn? <br>
			What should I now know? <br>
			Hold my tongue and cringe, <br>
			because I know it will be. <br>
			<br>
			So hard to convince, <br>
			you to ever believe <br>
			these words I'm saying <br>
			are the ones I'm praying.</strong>
		</p>
		<p class="textcolor col-md-4" style="float: left;">
			<strong>Spin styles fill my room <br>
			I feel so sedimentary <br>
			You will resonate, <br>
			every breath that I take. <br>
			<br>
			Something in your eyes, <br>
			Reflects ripples of light; <br>
			If you close them know, <br>
			I will surely die.</strong>
		</p>
		<p class="textcolor col-md-4" style="float: left;">
			<strong>Please take it on <br>
				blind faith: <br>
				I will love you always!
				<br>
				"Firs"</strong>
		</p>
	</div>
@stop
