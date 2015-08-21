@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View Blog Post</title>
    <style type="text/css"></style>
@stop

@section('content')
    <div class="container addpadd">
        <h2>{{{ $post->title }}}</h2>
        <h6>{{{ $post->created_at }}}</h6>
        <p>
            {{{ $post->body }}}
        </p>
        <a class="btn btn-warning" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
        <a class="btn btn-danger" style="float: right;" href="{{{ action('PostsController@destroy', $post->id) }}}">Delete Post</a>
    </div>

    {{-- Section for comments should go and whatever rating system I would like to use. --}}
@stop