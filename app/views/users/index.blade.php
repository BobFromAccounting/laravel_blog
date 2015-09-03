@extends('layouts.master')

@section('head')
    <meta name="description" content="View All Users">
    <title>User Index</title>
@stop

@section('content')
    <div class="container">

        <h1>User Index</h1>

        <div class="container">
            <div class="form-group col-md-6">
                {{ Form::open(array('action' => 'UsersController@index', 'method' => 'GET')) }}
                    {{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'search my users...', 'autofocus']) }}
                {{ Form::close() }}
            </div>
        </div>
        
        <div class="container">
            @foreach ($users as $user)
                <div class="container">
                    <h2>
                        {{{ $user->first_name }}} {{{ $user->last_name }}} <small style='font-size: .5em;'>Created: {{{ $user->created_at->diffForHumans() }}}</small>
                    </h2>
                    <p>
                        {{ $user->email }}
                    </p>
                    <a class="btn btn-default" href="{{{ action('UsersController@show', $user->id) }}}">View User Profile</a>
                </div>
            @endforeach
        </div>

        <div class="container">
            {{ $users->links() }}
        </div>
    </div>
@stop