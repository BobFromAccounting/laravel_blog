@extends('layouts.master')

@section('head')
        <meta name="description" content="Blog Creation page">
        <title>Create Blog Post</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit this Blog Post.</h3>
            </div>
            <div class="panel-body">
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'accept-charset' => 'UTF-8')) }}
                <div class="form-group">
                    {{ Form::label('title', 'Blog Title') }}
                    {{ Form::text('title', $post->title, ['class' => 'form-control', 'autofocus']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('body', 'Blog Body') }}
                    {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'rows' => '15']) }}
                </div>
                <button class="btn btn-default" type="submit">Save Changes</button>
                <a class="btn btn-danger" style="float: right;" href="{{{ action('PostsController@show', $post->id) }}}">Cancel</a>
            {{ Form::close() }}
            </div>
        </div>
    </div>    
@stop