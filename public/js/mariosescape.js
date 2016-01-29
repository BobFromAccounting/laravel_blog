(function () {
"use strict";
// variable dump :establishing the game loop, high score, click enabling, lives remaining,
// interval timing, and cheat code comparisons.

var gameLoop = false;
var isLooping;
var highscore = 0;
var enableClicks = false;
var livesRemaining = 3;
var interval = 750;
var warning = false;
var keystrokes = [], konamiKeys = "38,38,40,40,37,39,37,39,66,65,13";

// play button establishes a start mechanic and plays the theme audio.

$('#play').click(function (e) {
	e.preventDefault();
	enableClicks = true;
	gameLoop = true;
	document.getElementById("theme").play();
	gameLoopLogic();
});

// click event listener is listening for click events and running in game logic to establish
// scoring, interval setting changes, failure to match click the identified div, establishes
// a win condition, and plays audio files for matching and failed matching click events.

$(".molehole").click(function (event) {
	var moleholeClicked = $(this).attr('id');
	var moleholeCheck = $(this)
	
	function success () {
		if (highscore === 200) {
			highscore += 10;
			interval -= 50;
		} else {
			highscore += 10;
		}
		$('#score').text("Score: " + highscore);
	}

	function failure () {
		highscore -= 10;
		$('#score').text("Score: " + highscore);
		animateWrongClick(moleholeClicked)
	}

	function restart () {
		var tryAgain = confirm("Help Mario escape again?");
		if (tryAgain) {
			enableClicks = true;
			gameLoop = true;
			document.getElementById("theme").play();
			gameLoopLogic();
		}
	}
	
	if (enableClicks == true) {
		if (moleholeCheck.hasClass("active")) {
			success();
			document.getElementById("hit").play();
		} else {
			failure();
			livesRemaining -= 1;
			$("#lives").text("Lives: " + livesRemaining)
			document.getElementById("miss").play();
		}
		if ((highscore % 100) == 0) {
			document.getElementById("achievement").play();
		} 
		if (highscore === 500) {
			gameOver();
			alert("Mario has successfully escaped!")
		} else if (livesRemaining === 0 && warning === false) {
			alert("Oh, no! You have one last chance! Better make it count!");
			warning = true;
		} else if (livesRemaining < 0) {
			$("#lives").text("Lives: " + (livesRemaining + 1));
			document.getElementById("theme").pause();
			document.getElementById("death").play();
			gameOver();
			alert("Bowser WON?!?!");
			alert("And...now he's eating the Mushroom Kingdom...");
			restart();
			$("#score").text("Score: " + highscore);
			$("#lives").text("Lives: " + livesRemaining);
		}
	}
});

// establishes game over comparison and game loop logic.

function gameOver () {
	gameLoop = false;
	isLooping;
	highscore = 0;
	enableClicks = false;
	livesRemaining = 3;
	interval = 750;
	warning = false;
	gameLoopLogic();	
}

function gameLoopLogic () {
	if (gameLoop) {
		isLooping = setInterval(marioTravels, interval);	
	} else {
		clearInterval(isLooping);
	}
}

// animation functions for Mario to appear and what happens when you miss him.

function animateMario (id) {
	$('#' + id).addClass('active');
	setTimeout(function () {
		$('#' + id).removeClass('active');
	}, interval);
}

function animateWrongClick (id) {
	$('#' + id).addClass('wrong');
	setTimeout(function () {
		$('#' + id).removeClass('wrong');
	}, 250);
}

function marioTravels () {
	var squares = $('.molehole');
	var random = Math.floor(Math.random() * 9);
	var squareToAnimate = squares[random];
	var id = squareToAnimate.getAttribute('id');
	animateMario(id);
}

// Cheat code for extra lives.

$(document).keyup(function (e){
    keystrokes.push(e.keyCode);
    if (keystrokes.toString().indexOf(konamiKeys) >= 0) {
    	livesRemaining = 30;
    	$("#lives").text("Lives: " + livesRemaining);
		document.getElementById("achievement").play();
    	keystrokes = [];
    }
});
})();