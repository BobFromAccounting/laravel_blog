(function() {
	"use strict";

	var simonSays = [];
	var userIndex = 0;
	var advancedPlay = false;
	var ingameAudioLoop;


	//  user logic
	$(".square").click(function (e) {
		var squareClicked = $(this).attr('id');
		animateSquare(squareClicked);
		if (squareClicked == simonSays[userIndex]) {
			userIndex += 1;
			if (userIndex == simonSays.length) {
				simonsTurn();
				userIndex = 0;
			}
		} else {;
			gameOver();
		}
	});

	function animateSquare (id) {
		$('#' + id).addClass('active');
		setTimeout(function () {
			$('#' + id).removeClass('active');
		}, 250);
	}

	// simon logic
	function simonRandom () {
		var squares = $('.square');
		var random = Math.floor(Math.random() * 4);
		var buttonToAnimate = squares[random];
		var id = buttonToAnimate.getAttribute('id');
		simonSays.push(id);
	}

	function simonPlays () {
		$('#round').text("Round(s): " + simonSays.length);
		var i = 0;
		var intervalId = setInterval(function () {
			if (i >= simonSays.length) {
				clearInterval(intervalId);
			}
			animateSquare(simonSays[i]);
			i += 1;
		}, 250);
	}

	function simonsAdvancedPlay () {
		$('#round').text("Round(s): " + simonSays.length);
		setTimeout(function () {
			animateSquare(simonSays[simonSays.length - 1]);
		}, 500);
	}

	function simonsTurn () {
		simonRandom();
		if (advancedPlay == true) {
			simonsAdvancedPlay();
		} else {
			simonPlays();
		}
	}

	function gameOver() {
		clearInterval(ingameAudioLoop);
		document.getElementById("gameOverAudio").play();
		alert('You survived for ' + simonSays.length + ' nights!');
		location.reload(true);
	}

	function playGameAudio () {
			document.getElementById("inGameAudio").play();	
	}

	$('#play').click(function (e) {
		ingameAudioLoop = setInterval(playGameAudio, 700);
		e.preventDefault();
		simonSays = [];
		simonsTurn();
	});

	$('#advanced').click(function (e) {
		ingameAudioLoop = setInterval(playGameAudio, 700);
		e.preventDefault();
		simonSays = [];
		advancedPlay = true;
		simonsTurn();
	});
})();