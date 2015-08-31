@extends('layouts.master')

@section('head')
    <meta name="description" content="about">
    <title>About</title>
    <style type="text/css">
        body {
            background: url('/img/stormyroad.jpg') top left no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 100%;
            width: 100%;
        }
    </style>
@stop

@section('content')
    <div class="container col-md-offset-3 col-md-6 addpadd">
        <div class="panel panel-info" style="opacity: .7;">
            <div class="panel-heading">
                <h2 class="panel-title" align="center">About That Guy...</h2>
            </div>
            <div class="panel-body">
                <p>
                    I am a voracious consumer of literature and scientific research. With a constant hunger for knowledge, I am skilled at breaking down new and complex subjects into easy to understand concepts.
                </p>
                <p>
                    I am a Full Stack Web Developer with experience working with:
                </p>
                <p>
                    HTML, CSS, JavaScript, JQuery, PHP, Laravel, as well as MySQL, Linux, and Apache/nginx.
                </p>
            </div>      
        </div>
    </div>
@stop