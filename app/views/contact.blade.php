@extends('layouts.master')

@section('head')
    <meta name="description" content="contact">
    <title>Contact</title>
    <style type="text/css">
        body {
            background: url('/img/stormyroad.jpg') top left no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 100%;
            width: 100%;
        }
    </style>
@stop

@section('content')
     <div class="container col-md-offset-3 col-md-6 addpadd">
        <div class="panel panel-primary" style="opacity: .7;">
            <div class="panel-heading">
                <h2 class="panel-title" align="center">Contact That Guy...</h2>
            </div>
            <div class="panel-body">
                <p align="center">
                    You will be able to follow me on social media with the following links:
                </p>
                <div align="center">
                    <p>
                        <!-- Facebook Badge START -->
                        <a href="https://www.facebook.com/bobfraccounting"target="_TOP"><img class="img" src="https://badge.facebook.com/badge/1163308064.294.436705763.png"/></a><br /><!-- Facebook Badge END -->

                    </p>
                    <p>
                        <a class="twitter-follow-button" style="float:left;" href="https://twitter.com/BobFrAccounting">Follow @BobFrAccounting</a>
                        
                    </p>
                    <p>
                        <a href="https://www.linkedin.com/pub/tarek-hafez/b7/864/165"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View Tarek Hafez's profile on LinkedIn"></a>
                    </p>
                </div>
            </div>      
        </div>
    </div>
@stop
@section('script')
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>
@stop