@extends('layouts.master')

@section('head')
    <meta name="description" content="404">
    <title>404 Missing Page</title>
    <style type="text/css">
    body {
        background-image: url('/img/404.jpg');
    }
    </style>
@stop

@section('content')
    <div class="container mortalfonttype">
        <h1 align="center" style="color: maroon;">404 Fatality!</h1>

        <div align="center">
            <embed src="http://www.classicgamesarcade.com/games/mortal-kombat.swf" width="600px" height="313px" autostart="true" loop="false" controller="true"></embed><br /><a href="http://www.classicgamesarcade.com/game/21690/mortal-kombat.html">Mortal Kombat</a>
        </div>
    </div>       
@stop