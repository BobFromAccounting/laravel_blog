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
    <div class="container col-md-offset-3 col-md-6 col-md-offset-3 addpadd">
        <div class="panel panel-info" style="opacity: .7;">
            <div class="panel-heading">
                <h2 class="panel-title" align="center">About Tarek</h2>
            </div>
            <div class="panel-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>      
        </div>
    </div>
@stop