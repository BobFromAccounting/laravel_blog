<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" contents="Tarek S Hafez">
        <meta name="csrf-token" content="{{{ csrf_token() }}}">
        @yield('head')
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.9.0/css/bootstrap-markdown.min.css">
        <link rel="stylesheet" type="text/css" href="/css/custom.css">
        <link rel="stylesheet" type="text/css" href="/css/carousel.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.9.0/js/bootstrap-markdown.min.js"></script>
    </head>
    <body>
        <div="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">T S Hafez</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
                            <li><a href="{{{ action('HomeController@showContact') }}}">Contact</a></li>
                            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
                            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
                            <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if(Entrust::hasRole('admin'))
                                <li><a href="{{{ action('UsersController@index') }}}">User Index</a></li>
                            @elseif(Auth::check())
                                <li><a href="{{{ action('UsersController@show', Auth::id()) }}}">View Profile</a></li>
                            @endif
                            @if(Auth::check())
                                <li><a href="{{{ action('AuthController@logout') }}}">Logout</a></li>
                            @else
                                <li><a href="{{{ action('AuthController@login') }}}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="container" style="padding-top: 60px;">
            @if (Session::has('successMessage'))
                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif

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
        @yield('script')
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-67022510-1', 'auto');
              ga('send', 'pageview');
        </script>
    </body>
</html>