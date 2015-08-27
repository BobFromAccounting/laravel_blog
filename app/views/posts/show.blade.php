@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View Blog Post</title>
    <style type="text/css"></style>
@stop

@section('content')
    <div class="container addpadd col-md-offset-2 col-md-8 col-md-offset-2">
        <h1>{{{ $post->title }}}</h1>
        <h3>
            Created: {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}} by: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}
        </h3>
        <p>
            {{{ $post->body }}}
        </p>

        <a class="btn btn-info" href="{{{ action('PostsController@index') }}}">Back</a>
        @if((Auth::check() && Auth::id() == $post->user_id) || (Auth::check() && Entrust::hasRole('admin')))
            <a class="btn btn-warning" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
        @endif
        @if(Entrust::hasRole('admin'))
            <button id="delete" class="btn btn-danger">Delete Post</button>
        @endif
    </div>

    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}
    {{ Form::close() }}
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