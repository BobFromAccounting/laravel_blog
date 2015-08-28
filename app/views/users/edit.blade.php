@extends('layouts.master')

@section('head')
        <meta name="description" content="User Edit page">
        <title>Edit User Profile</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Your User Profile</h3>
            </div>
            {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'accept-charset' => 'UTF-8')) }}
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::label('first_name', 'First Name') }}
                        {{ Form::text('first_name', null, ['class' => 'form-control', 'autofocus']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('last_name', 'Last Name') }}
                        {{ Form::text('last_name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Save Changes', array('class' => 'btn btn-success', 'style' => 'float: right;')) }}
                    <a class="btn btn-default" href="{{{ action('UsersController@show', $user->id) }}}">Cancel</a>
                    @if(Entrust::hasRole('admin'))
                        <a class="btn btn-danger" href="{{{ action('UsersController@role', $user->id) }}}">Edit Roles</a>
                    @endif
                </div> 
            {{ Form::close() }}
        </div>
    </div>
@stop