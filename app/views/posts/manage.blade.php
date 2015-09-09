@extends('layouts.master')

@section('head')
    <meta name="description" content="manage posts with angularJS">
    <title>Manage Posts</title>
@stop

@section('content')
    <div class="container" ng-app="blog">
        <table class="table table-responsive" ng-controller="ManageController">
            <tr>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Post Created On</th>
            </tr>
            <tr ng-repeat="post in posts">
                <td>@{{ post.title }}</td>
                <td>@{{ post.user.username }}</td>
                <td>@{{ post.created_at.date }}</td>
                <td><button class="btn btn-danger btn-xs" ng-click="deletePost($index)"><span class="glyphicon glyphicon-remove"></span></button></td>
            </tr>
        </table>
    </div>
@stop

@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.5/angular.min.js"></script>
    <script type="text/javascript" src="/js/blog.js"></script>
@stop