@extends('layouts.master')

@section('head')
    <meta name="description" content="View All Users">
    <title>Users Index</title>
@stop

@section('content')
    <div class="container">
        <h1>Users</h1>
        {{ $users->links() }}
        <br>
        <br>
    @foreach ($users as $user)
        <div class="container">
            <h2>
                {{{ $user->first_name }}} <small style='font-size: .5em;'>{{{ $user->created_at->diffForHumans() }}}</small>
            </h2>
            <a class="btn btn-default" href="{{{ action('UsersController@show', $user->id) }}}">View User Profile</a>
        </div>
    @endforeach
    </div>
@stop