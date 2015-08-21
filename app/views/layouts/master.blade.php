<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" contents="Tarek S Hafez">
        @yield('head')
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/custom.css">
        <link rel="stylesheet" type="text/css" href="/css/carousel.css">
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
    </head>
    <body>
        <div="row">
            <div class="col-md-12">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{{ action('HomeController@showhome') }}}">Tarek S Hafez</a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{{ action('HomeController@showresume') }}}">Resume</a></li>
                            <li><a href="{{{ action('HomeController@showportfolio') }}}">Portfolio</a></li>
                            <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        <div class="container" style="padding-top: 60px;">
            @if ($errors->has())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{{ $error }}}</li>
                        </ul>
                    @endforeach
                </div>
            @endif
        </div>
            @yield('content')
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
</html>