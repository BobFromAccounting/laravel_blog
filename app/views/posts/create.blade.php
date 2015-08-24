@extends('layouts.master')

@section('head')
        <meta name="description" content="Blog Creation page">
        <title>Create Blog Post</title>
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create a Blog Post.</h3>
            </div>

            {{ Form::open(array('action' => 'PostsController@store')) }}
                <div class="panel-body">
        
                    @include('posts.create-edit')
                    
                    {{ Form::submit('Save Post', array('class' => 'btn btn-success', 'style' => 'float: right;'))}}
                    <a class="btn btn-danger" href="{{{ action('PostsController@index') }}}">Cancel</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>   
@stop