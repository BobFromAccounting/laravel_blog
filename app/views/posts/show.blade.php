@extends('layouts.master')

@section('head')
    <meta name="description" content="View Blog Posts">
    <title>View Blog Post</title>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "f96deb9e-b1ee-4110-8ce1-9595b76a769a", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>

@stop

@section('content')
    <div class="container addpadd col-md-offset-2 col-md-8">
        <h1>{{{ $post->title }}}</h1>

        <img src="{{{ $post->image }}}">

        <h3>
            Created: {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}} by: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}
        </h3>
        <p>
            {{ $post->renderBody() }}
        </p>
        
        <a class="btn btn-info" href="{{{ action('PostsController@index') }}}">Back</a>
        @if((Auth::check() && Auth::id() == $post->user_id) || (Auth::check() && Entrust::hasRole('admin')))
            <a class="btn btn-warning" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
        @endif
        @if(Entrust::hasRole('admin'))
            <button id="delete" class="btn btn-danger">Delete Post</button>
        @endif
        
    </div>
    <br>
    <div class="container col-md-2">
        <span class='st_sharethis_large' displayText='ShareThis'></span>
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_linkedin_large' displayText='LinkedIn'></span>
        <span class='st_reddit_large' displayText='Reddit'></span>
        <span class='st_blogger_large' displayText='Blogger'></span>
        <span class='st_email_large' displayText='Email'></span>
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