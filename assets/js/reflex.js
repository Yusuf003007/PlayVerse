let score = 0;
let gameTime = 15;

let timer;
let gameStarted = false;

const box = document.getElementById("box");

const scoreText = document.getElementById("score");

const timeText = document.getElementById("time");

const startScreen = document.getElementById("start-screen");

const gameOverScreen = document.getElementById("game-over-screen");

const finalScore = document.getElementById("final-score");


// START GAME
function startGame(){

    if(gameStarted) return;

    gameStarted = true;

    startScreen.style.display = "none";

    spawnBox();

    timer = setInterval(() => {

        gameTime--;

        timeText.innerText = gameTime;

        if(gameTime <= 0){

            endGame();
        }

    }, 1000);
}


// SPAWN BOX
function spawnBox(){

    if(gameTime <= 0) return;

    // oyun alanı boyutu
    const gameArea = document.getElementById("game-area");

    const maxX = gameArea.clientWidth - 80;

    const maxY = gameArea.clientHeight - 80;

    // random position
    let x = Math.random() * maxX;

    let y = Math.random() * maxY;

    box.style.left = x + "px";

    box.style.top = y + "px";

    box.style.display = "block";
}


// BOX CLICK
box.addEventListener("click", () => {

    if(gameTime <= 0) return;

    score++;

    scoreText.innerText = score;

    spawnBox();
});


// END GAME
function endGame(){

    clearInterval(timer);

    box.style.display = "none";

    finalScore.innerText = "Your Score: " + score;

    gameOverScreen.style.display = "flex";

    saveScore(score);
}


// RESTART
function restartGame(){

    location.reload();
}


// SAVE SCORE
function saveScore(score){

    fetch("../save_score.php", {

        method:"POST",

        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },

        body:"score=" + score + "&game_id=1"
    })

    .then(response => response.text())

    .then(data => {

        console.log(data);
    });
}