@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View All Blog Posts</title>
@stop

@section('content')
    <div class="container">
        <h1>Tarek's thoughts...</h1>
        <div class="form-group">
            {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}
                {{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'search my thoughts...', 'autofocus']) }}
            {{ Form::close() }}
        </div>

        {{ $posts->links() }}

    @foreach ($posts as $post)
        <div class="container">
            <h2>
                {{{ $post->title }}} <small style='font-size: .5em;'>{{{ $post->created_at->diffForHumans() }}}</small>
            </h2>
            <p>
                Authored by: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}
            </p>
            <p>
                {{{ Str::words($post->body, 20) }}}
            </p>
            <a class="btn btn-default" href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a>
        </div>
    @endforeach
        <a class="btn btn-primary" style="float: right;" href="{{{ action('PostsController@create') }}}">Create New Post</a>
    </div>
@stop