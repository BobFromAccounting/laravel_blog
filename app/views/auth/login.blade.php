@extends('layouts.master');

@section('head');
    <meta name="description" content="login">
    <title>Login</title>
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
    <div class="modal fade" id="mySignupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Signup</h4>
          </div>
          <div class="modal-body">
            @include('auth.create-user')
          </div>
        </div>
      </div>
    </div>
    <div class="container col-md-offset-4 col-md-4 col-md-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title" align="center">Login</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('action' => 'AuthController@doLogin')) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'autofocus']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>

                    {{ Form::submit('Login', array('class' => 'btn btn-default', 'style' => 'float: right;'))}}    
                {{ Form::close() }}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mySignupModal">
                    Signup
                </button>
            </div>      
        </div>
    </div>             
@stop