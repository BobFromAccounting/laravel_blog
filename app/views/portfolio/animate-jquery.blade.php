<!DOCTYPE html>
<html>
    <head>
        <title>Animate</title>
        <style>
            html, body {
                margin: 0px;
                padding: 0;
            }
            #btn-animate {
                margin: 15px;
            }
            .box {
                background-color: #000033;
                height: 250px;
                margin: 15px;
                position: relative;
                width: 250px;
            }
        </style>
    </head>
    <body>

        <p>
            <button id="btn-move">Move It</button>

            <button id="btn-move-back">Move It Back</button>

            <button id="btn-scale-up">Scale It Up</button>

            <button id="btn-scale-down">Scale It Down</button>

            <button id="btn-disappear">Disappear It</button>

            <button id="btn-show">Show It</button>

            <button id="btn-all">Animate all</button>
        </p>

        <div id="animate-box" class="box"></div>

        <script src="/js/jquery.js"></script>
        <script>

            (function(){

                'use strict';

                $(document).ready(function () {
                    $("#btn-move").click(function () {
                        $("#animate-box").animate({
                            left: "+=100"
                        }, 1000)
                    });
                    $("#btn-move-back").click(function () {
                        $("#animate-box").animate({
                            left: "-=100"
                        }, 1000)
                    });
                    $("#btn-scale-up").click(function () {
                        $("#animate-box").animate({
                            width: "+=50%"
                        }, 500)
                    });
                    $("#btn-scale-down").click(function () {
                        $("#animate-box").animate({
                            width: "-=50%"
                        }, 500)
                    });
                    $("#btn-disappear").click(function () {
                        $(".box").animate({
                            opacity: 0
                        }, 500)
                    });
                    $("#btn-show").click(function () {
                        $(".box").animate({
                            opacity: 1
                        }, 500)
                    });
                    $("#btn-all").click(function () {
                        $("#animate-box")
                        .animate({ left: "+=100" }, 250 )
                        .animate({ left: "-=100" }, 500 )
                        .animate({ width: "+=50%" }, 500 )
                        .animate({ opacity: 0 }, 500 )
                        .animate({ opacity: 1 }, 1500 );
                    });
                });
            })();
        
        </script>
    </body>
</html>