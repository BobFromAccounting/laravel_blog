(function () {
    var Game = function (advanced) {
        var squares = $('.square');
        return {
            userIndex: 0,
            advanced: advanced,
            audioLoop: null,
            disableClicks: true,
            squares: squares,
            animateSquare: function (square) {
                $(square).addClass('active');
                setTimeout(function () {
                    $(square).removeClass('active');
                }, 250);
            },
            setGameAudio: function (cb, duration) {
                this.audioLoop = setInterval(cb, duration);
            },
            clearAudioLoop: function () {
                clearInterval(this.audioLoop);
            },
            over: function () {
                clearInterval(this.ingameAudioLoop);
                this.disableClicks = true;
                this.playAudio("end");
            },
            playAudio: function (audio) {
                document.getElementById(audio).play();
            },
            success: function () {
                this.userIndex = 0;
                this.disableClicks = true;
            },
            userTurn: function () {
                this.disableClicks = false;
            },
            wakeUpSimon: function () {
                return Simon(this);
            }
        }
    };

    var Simon = function (game) {
        return {
            says: [],
            difficult: game.advanced,
            getRandomSquare: function () {
                return game.squares[Math.floor(Math.random() * 4)];
            },
            updateScore: function () {
                $("#round").text("Round(s): " + this.says.length);
            },
            turn: function () {
                this.says.push(this.getRandomSquare());
                if (this.difficult == true) {
                    this.advancedPlay();
                } else {
                    this.play();
                }
                game.userTurn();
            },
            play: function () {
                var duration = 650;
                this.updateScore();
                this.says.forEach(function (element) {
                    setTimeout(function () {
                        game.animateSquare(element);
                    }, duration);
                    duration += 650;
                });
            },
            advancedPlay: function () {
                this.updateScore();
                var that = this;
                setTimeout(function () {
                    game.animateSquare(that.says[that.says.length - 1]);
                }, 650);
            },
            checkMatchOnClick: function (context) {
                return (context == this.says[game.userIndex]);
            },
            checkSuccessfulSequence: function () {
                return (game.userIndex == this.says.length);
            }

        }
    }
    var begin = function (game) {
        game.setGameAudio(game.playAudio('default'), 700);
        var simon = game.wakeUpSimon();
        simon.updateScore();
        game.squares.click(function () {
            if (!game.disableClicks) {
                game.animateSquare(this);
                if (simon.checkMatchOnClick(this)) {
                    game.userIndex += 1;
                    if (simon.checkSuccessfulSequence()) {
                        game.success();
                        simon.turn();
                    }
                } else {
                    game.over();
                    $("#round").text('You survived for ' + simon.says.length + ' nights!');
                }
            }
        });
        simon.turn();
    };

    $("#play").click(function () {
        begin(Game(false));
    });

    $("#advanced").click(function () {
        begin(Game(true));
    });
}());
$('p').text("I am the new text.");

console.log($('li').last());

console.log($('ul').last().children().last('li'));
