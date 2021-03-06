<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Mario's Escape Plan">
        <meta name="author" content="Tarek S Hafez">
        <title>Mario's Escape Plan</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/mariosescape.css">
    </head>
    <body>
        <audio id="theme" src="/audio/theme.mp3" type="audio/mpeg"></audio>
        <audio id="achievement" src="/audio/powerup.wav" type="audio/wav"></audio>
        <audio id="hit" src="/audio/pipe.wav" type="audio/wav"></audio>
        <audio id="miss" src="/audio/miss.wav" type="audio/wav"></audio>
        <audio id="death" src="/audio/death.wav" type="audio/wav"></audio>
        <div class="container" id="headbox">
            <h1 class="text-uppercase" id="title">Mario's Escape Plan</h1>
            <button type="button" class="btn btn-primary btn-lg btn-block" id="lives">Lives: 3  </button>
        </div>
        <div class="container" id="gameBox">
            <div class="molehole" id="pipeOne"></div>
            <div class="molehole" id="pipeTwo"></div>
            <div class="molehole" id="pipeThree"></div>
            <div class="molehole" id="PipeFour"></div>
            <div class="molehole" id="PipeFive"></div>
            <div class="molehole" id="PipeSix"></div>
            <div class="molehole" id="PipeSeven"></div>
            <div class="molehole" id="PipeEight"></div>
            <div class="molehole" id="PipeNine"></div>
            <button type="button" class="btn btn-success btn-lg btn-block" id="play">Play</button>
            <button type="button" class="btn btn-primary btn-lg btn-block" id="score">Score: 0  </button>
        </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/mariosescape.js"></script>
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