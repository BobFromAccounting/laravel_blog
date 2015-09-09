(function () {
    'use strict';

    var app = angular.module("blog", []);

    const TOKEN = $("meta[name=csrf-token]").attr("content");

    app.constant("CSRF_TOKEN", TOKEN);

    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManageController", ["$http", "$log", "$scope", function($http, $log, $scope) {
        $scope.posts = [];

        $scope.currentPost = {};

        $http.get('/posts/list').then(function (response) {
            $log.info("Post list success response");

            $scope.posts = response.data;
        }, function (response) {
            $log.error("Post list error response");

            $log.debug(response);
        });

        $scope.parseDate = function (string) {
            var date = moment(string);
            return date.format();
        };

        $scope.deletePost = function (index) {
            var id = $scope.posts[index].id;

            $http.delete('/posts/' + id).then(function (response) {
                $log.info("Post successfully deleted");

                $scope.posts.splice(index, 1);
            }, function (response) {
                $log.error("Post failed to delete");

                $log.debug(response);
            });
        };

        $scope.showModal = function (index) {
            $scope.currentPost = $scope.posts[index];

            $('#modal').modal();
        };

        $scope.editPost = function (editForm) {
            var id = $scope.currentPost.id;

            $http.put('/posts/' + id, {
                "title": $scope.currentPost.title,
                "body" : $scope.currentPost.body,
            }).then(function (response) {
                $log.info("Attempt to edit sent");

                $('#modal').modal('hide');
            }, function (response) {
                $log.error("Attempt to edit failed");

                $log.debug(response);
            });
        };

    }]);
})();