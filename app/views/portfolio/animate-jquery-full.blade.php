<!DOCTYPE html>
<html>
    <head>
        <title>Fun Times</title>
        <style type="text/css">
        .container {
            height: 250px;
            margin: 15px;
            position: relative;
            width: 250px;
         }
        </style>
        <script type="text/javascript" src="/js/jquery.js"></script>
    </head>
    <body>
        <div class="container">
            <img class="moveMe" id="hideMe" src="/img/pokeball.png">
            <h1 id="hiddenMessage">A Wild Snolax Appeared</h1>
            <img class="moveHim" id="hideHim" src="/img/TopHatSnolax.jpg">
        </div>
        <script type="text/javascript">
            
            "use strict";
            
            $(document).ready(function() {

                $("#hideHim").hide();
                $("#hiddenMessage").hide();

                function up() {
                    $(".container").animate({ top: "+=100" }, 100);
                }

                function down() {
                    $(".container").animate({ top: "-=100" }, 100);
                }

                function right() {
                    $(".container").animate({ left: "+=100"}, 100);
                }

                function left() {
                    $(".container").animate({ left: "-=100"}, 100);
                }

                $(document).keyup(function (e) {
                    switch (e.keyCode) {
                        case (40):
                            up();
                            break;
                        case (38):
                            down();
                            break;
                        case (39):
                            right();
                            break;
                        case (37):
                            left();
                            break;
                    }
                });
                
                var keystrokes = [],
                konamiKeys = "38,38,40,40,37,39,37,39,66,65,13";

                $(document).keyup(function (e){
                    keystrokes.push(e.keyCode);
                    if (keystrokes.toString().indexOf(konamiKeys) >= 0) {
                        $("#hideMe").hide();
                        $("#hideHim").show();
                        $("#hiddenMessage").show();
                        $("#hideHim").animate({
                            width: "+=50%"
                        }, 500);
                        keystrokes = [];
                    }
                });
            });
        </script>
    </body>
</html>