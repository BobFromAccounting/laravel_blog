@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View Blog Post</title>
    <style type="text/css"></style>
@stop

@section('content')
    <div class="container">
        <h2>{{{ $post->title }}}</h2>
        <h6>
            {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}
        </h6>
        <p>
            {{{ $post->body }}}
        </p>
        <a class="btn btn-info" href="{{{ action('PostsController@index') }}}">Back</a>
        <a class="btn btn-warning" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
        <button id="delete" class="btn btn-danger">Delete Post</button>
    </div>

    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}
    {{ Form::close() }}
    {{-- Section for comments should go and whatever rating system I would like to use. --}}
@stop

@section('script')
    <script type="text/javascript">
        (function (){
            "use strict";
            $('#delete').on('click', function(){
                var onConfirm = confirm("Are you sure you'd like to delete this post?");

                if (onConfirm) {
                    $('#formDelete').submit();
                }

            });
        })();
    </script>
@stop