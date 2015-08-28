@extends('layouts.master')

@section('head')
        <meta name="description" content="Blog Edit page">
        <title>Edit Blog Post</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Your Blog Post.</h3>
            </div>
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'accept-charset' => 'UTF-8')) }}
                <div class="panel-body">

                    @include('posts.create-edit')

                    {{ Form::submit('Save Changes', array('class' => 'btn btn-success', 'style' => 'float: right;')) }}
                    <a class="btn btn-danger" href="{{{ action('PostsController@show', $post->id) }}}">Cancel</a>
                </div> 
            {{ Form::close() }}
        </div>
    </div>
@stop