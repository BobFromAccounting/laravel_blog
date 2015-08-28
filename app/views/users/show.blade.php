@extends('layouts.master')

@section('head')
    <meta name="description" content="View User Profile">
    <title>View User Profile</title>
@stop

@section('content')
    <div class="container addpadd col-md-offset-2 col-md-8 col-md-offset-2">
        <h1>{{{ $user->first_name }}} {{{ $user->last_name }}}</h1>
        <h3>
            Joined: {{{ $user->created_at->format('l, F jS Y @ h:i:s A') }}}
        </h3>
        <p>
            {{{ $user->email }}}
        </p>
        @if(Entrust::hasRole('admin'))
            @foreach ($user->roles as $role)
                <p>
                    <strong>{{{ $role->display_name }}}: </strong>
                </p>
                <p>
                    {{{ $role->description }}}
                </p>
            @endforeach
        @endif
        @if(Entrust::hasRole('admin'))
            <a class="btn btn-info" href="{{{ action('UsersController@index') }}}">Back</a>
        @else
            <a class="btn btn-info" href="{{{ action('PostsController@index') }}}">Back</a>
        @endif
        @if((Auth::check() && Auth::id() == $user->id) || (Auth::check() && Entrust::hasRole('admin')))
            <a class="btn btn-warning" href="{{{ action('UsersController@edit', $user->id) }}}">Edit User</a>
        @endif
    </div>
@stop