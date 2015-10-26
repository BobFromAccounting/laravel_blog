<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Simple Simon Game">
        <meta name="author" content="Tarek S Hafez">
        <title>Simple Simon</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/simplesimon.css">
    </head>
    <body>
        <audio id="gameOverAudio" src="/audio/RingAroundTheRosie.mp3" type="audio/mpeg">
        </audio>
        <audio id="inGameAudio" src="/audio/horrorambient.mp3" type="audio/mpeg">
        </audio>

        <div class="container" id="gamebox">
            <div class="square" id="brown"></div>
            <div class="square" id="red"></div>
            <div class="square" id="violet"></div>
            <div class="square" id="blue"></div>
        </div>
        <div id="startbuttons">
            <a class="btn btn-danger text" id="play" role="button">Play</a>
            <a class="btn btn-danger text" id="advanced" role="button">Advanced</a>
            <a class="btn btn-danger text" id="round" role="button">Round: 1</a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/simplesimonOO.js"></script>
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