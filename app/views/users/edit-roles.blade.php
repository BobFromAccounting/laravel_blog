@extends('layouts.master')

@section('head')
        <meta name="description" content="Edit User Roles Page">
        <title>Edit User Roles</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit User Roles</h3>
            </div>
            {{ Form::model($user, array('action' => array('UsersController@editRole'), 'method' => 'PUT', 'accept-charset' => 'UTF-8')) }}
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::label('roles', 'First Name') }}
                        {{ Form::select('roles', null, ['class' => 'form-control', 'autofocus']) }}
                    </div>
                    {{ Form::submit('Save Changes', array('class' => 'btn btn-warning', 'style' => 'float: right;')) }}
                    <a class="btn btn-default" href="{{{ action('UsersController@edit', $user->id) }}}">Cancel</a>
                </div> 
            {{ Form::close() }}
        </div>
    </div>
@stop