@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View All Blog Posts</title>
    <style type="text/css">

    </style>
@stop

@section('content')
    <div class="container">
        <h1 class="fancy-header">Tarek's thoughts...</h1>
        {{ $posts->links() }}
        <a class="btn btn-primary" style="float: right;" href="{{{ action('PostsController@create') }}}">Create New Post</a>
    @foreach ($posts as $key => $post)
        <div class="container">
            <h2>{{{ $post->title }}} <small style='font-size: .5em;'>{{{ $post->created_at->diffForHumans() }}}</small></h2>
            
            <a class="btn btn-default" href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a>
        </div>
    @endforeach
    </div>
@stop