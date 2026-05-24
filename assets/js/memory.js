const symbols = ["🍎","🍎","🎮","🎮","🚀","🚀","🔥","🔥"];

let shuffled = symbols.sort(() => 0.5 - Math.random());

const grid = document.getElementById("memory-grid");

let firstCard = null;
let secondCard = null;

let lockBoard = false;

let moves = 0;

let matchedPairs = 0;


// CREATE CARDS
shuffled.forEach(symbol => {

    const card = document.createElement("div");

    card.classList.add("card", "hidden");

    card.dataset.symbol = symbol;

    card.innerText = symbol;

    card.addEventListener("click", flipCard);

    grid.appendChild(card);
});


// FLIP CARD
function flipCard(){

    if(lockBoard) return;

    if(this === firstCard) return;

    this.classList.remove("hidden");

    if(!firstCard){

        firstCard = this;

        return;
    }

    secondCard = this;

    moves++;

    document.getElementById("moves").innerText = moves;

    checkMatch();
}


// CHECK MATCH
function checkMatch(){

    let isMatch =
        firstCard.dataset.symbol === secondCard.dataset.symbol;

    if(isMatch){

        disableCards();

    }else{

        unflipCards();
    }
}


// MATCHED
function disableCards(){

    matchedPairs++;

    resetBoard();

    if(matchedPairs === 4){

    setTimeout(() => {

        let finalScore = 100 - moves;

        if(finalScore < 0){

            finalScore = 0;
        }

        alert(
            "You won in " + moves + " moves!\n" +
            "Score: " + finalScore
        );

        // SAVE SCORE
        saveScore(finalScore);

    }, 500);
}
}


// NOT MATCH
function unflipCards(){

    lockBoard = true;

    setTimeout(() => {

        firstCard.classList.add("hidden");

        secondCard.classList.add("hidden");

        resetBoard();

    }, 1000);
}


// RESET
function resetBoard(){

    [firstCard, secondCard] = [null, null];

    lockBoard = false;
}

// SAVE SCORE
function saveScore(score){

    fetch("../save_score.php", {

        method:"POST",

        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },

        body:"score=" + score + "&game_id=2"
    })

    .then(response => response.text())

    .then(data => {

        console.log(data);
    });
}