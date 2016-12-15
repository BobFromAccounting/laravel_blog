'use strict';

var simon = {

    says: [],
    userIndex: 0,
    advanced: false,
    ingameAudioLoop: null,
    squares: null,
    squareToAnimate: null,
    decisionId: null,
    disableClicks: true,

    decisionLogic: function () {
        return Math.floor(Math.random() * 4);
    },
    choosesRandomly: function () {
        this.squares = $('.square');
        this.squareToAnimate = this.squares[this.decisionLogic()];
        this.decisionId = this.squareToAnimate.getAttribute('id');
        this.says.push(this.decisionId);
    },
    playGameAudio: function () {
        document.getElementById("inGameAudio").play();
    },
    turn: function () {
        this.choosesRandomly();
        if (this.advanced == true) {
            this.advancedPlay();
        } else {
            this.play();
        }
        this.userTurn();
    },
    userTurn: function () {
        this.disableClicks = false;
    },
    play: function () {
        var duration = 650;
        var i = 0;
        var that = this;
        this.updateScore();
        this.says.forEach(function (element, index, array) {
            setTimeout(function () {
                that.animateSquare(element);
            }, duration);
            i += 1;
            duration += 650;
        });
    },
    advancedPlay: function () {
        this.updateScore();
        setTimeout(function () {
            simon.animateSquare(simon.says[simon.says.length - 1]);
        }, 650);
    },
    animateSquare: function (id) {
        $('#' + id).addClass('active');
        setTimeout(function () {
            $('#' + id).removeClass('active');
        }, 250);
    },
    updateScore: function () {
        $('#round').text("Round(s): " + this.says.length);
    },
    begin: function () {
        this.ingameAudioLoop = setInterval(this.playGameAudio, 700);
        this.says = [];
        this.turn();
    },
    gameOver: function () {
        clearInterval(this.ingameAudioLoop);
        document.getElementById("gameOverAudio").play();
        alert('You survived for ' + this.says.length + ' nights!');
        location.reload(true);
    },
    initializeGame: function (){
        $('.square').click(function (e) {
            if (!simon.disableClicks) {
                var squareClicked = $(this).attr('id');

                simon.animateSquare(squareClicked);

                if (squareClicked == simon.says[simon.userIndex]) {
                    simon.userIndex += 1;
                    if (simon.userIndex == simon.says.length) {
                        simon.disableClicks = true;
                        simon.userIndex = 0;
                        simon.turn();
                    }
                } else {
                    simon.gameOver();
                }
            }
        });

        $('#play').click(function (e) {
            e.preventDefault;
            simon.begin();
        });

        $('#advanced').click(function (e) {
            e.preventDefault;
            simon.advanced = true;
            simon.begin();
        });
    }
};

simon.initializeGame();
