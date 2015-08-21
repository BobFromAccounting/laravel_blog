@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View All Blog Posts</title>
    <style type="text/css">

    </style>
@stop

@section('content')
    <div class="container">
        <h1 class="fancy-header">Tarek thought...</h1>
        {{ $posts->links() }}
        <p>Showing {{{ $posts->getPerPage() }}} of {{{ $posts->getTotal() }}} total records</p>
        <a class="btn btn-success" style="float: right;" href="{{{ action('PostsController@create') }}}">Create New Post</a>
    @foreach ($posts as $key => $post)
        <div class="container">
            <h2>{{{ $post->title }}}</h1>
            <p>
                {{{ $post->body }}}
            </p>
            <a class="btn btn-primary" style="float: right;" href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a>
        </div>
    @endforeach
    </div>
@stop