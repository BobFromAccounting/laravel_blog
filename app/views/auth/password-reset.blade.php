@extends('layouts.master')

@section('head')
    <meta name="description" content="Reset Password">
    <title>Reset Password</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Reset Password</h3>
            </div>

            {{ Form::open(array('action' => 'AuthController@doResetPassword', 'accept-charset' => "UTF-8")) }}
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::hidden('token', "{{{ $token }}}", ['class' => 'form-control']) }}
                        {{ Form::hidden('_token', "{{{ Session::getToken() }}}", ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', "{{{ Lang::get('confide::confide.password') }}}") }}
                        {{ Form::password('password', null, ['class' => 'form-control', 'placeholder' => "{{{ Lang::get('confide::confide.password') }}}"]) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password_confirmation', "{{{ Lang::get('confide::confide.password_confirmation') }}}") }}
                        {{ Form::password('password_confirmation', null, ['class' => 'form-control', 'placeholder' => "{{{ Lang::get('confide::confide.password_confirmation') }}}", 'id' => 'password_confirmation']) }}
                    </div>
                    
                    @if (Session::get('error'))
                        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                    @endif

                    @if (Session::get('notice'))
                        <div class="alert alert-warning">{{{ Session::get('notice') }}}</div>
                    @endif

                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
                    </div>              
                </div>
            {{ Form::close() }}
        </div>
    </div>   
@stop