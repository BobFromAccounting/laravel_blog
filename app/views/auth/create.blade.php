@extends('layouts.master')

@section('head')
    <meta name="description" content="signup">
    <title>Signup</title>
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
    <div class="container col-md-offset-4 col-md-4 col-md-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title" align="center">Signup</h3>
            </div>
            <div class="panel-body">
                @include('auth.create-user')
            </div>      
        </div>
    </div>
@stop