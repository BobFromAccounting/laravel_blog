@extends('layouts.master')

@section('head')
    <meta name="description" content="manage posts with angularJS">
    <title>Manage Posts</title>
@stop

@section('content')
    <main class="container" ng-app="blog" ng-controller="ManageController">
        <table class="table table-responsive" >
            <tr>
                <th>Post Title</th>
                <th>Post Author</th>
                <th>Post Created On</th>
            </tr>
            <tr class="ng-cloak" ng-repeat="post in posts">
                <td><a href="/posts/@{{ post.id }}">@{{ post.title }}</a></td>
                <td>@{{ post.user.username }}</td>
                <td>@{{ parseDate(post.created_at.date) | date:"longDate" }}</td>
                <td><button class="btn btn-default btn-xs" ng-click="showModal($index)"><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs" ng-click="deletePost($index)"><span class="glyphicon glyphicon-remove"></span></button></td>
            </tr>
        </table>
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Post</h4>
                    </div>
                    <div class="modal-body">
                        <form name="editForm" id="target" ng-submit="editPost(editForm)" novalidate>
                            <div class="form-group">
                                <label for="title">Blog Title</label>
                                <input type="text" name="title" id="title" ng-model="currentPost.title" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="body">Blog Title</label>
                                <textarea name="body" id="body" class="form-control" rows="8" required>@{{ currentPost.body }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </main>
@stop

@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.5/angular.min.js"></script>
    <script type="text/javascript" src="/js/blog.js"></script>
    <script type="text/javascript" src="/js/moment.js"></script>
@stop