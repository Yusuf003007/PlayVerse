<?php
include '../includes/auth.php';
include '../includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reflex Game - PlayVerse</title>
    <style>
        #box {
            width: 100px;
            height: 100px;
            background: red;
            position: absolute;
            display: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Reflex Game</h2>
<p>Click the box as fast as you can!</p>

<p>Score: <span id="score">0</span></p>

<div id="box"></div>

<script>
let score = 0;
let box = document.getElementById("box");

function showBox() {
    let x = Math.random() * 400;
    let y = Math.random() * 300;

    box.style.left = x + "px";
    box.style.top = y + "px";
    box.style.display = "block";

    setTimeout(() => {
        box.style.display = "none";
    }, 1000);
}

box.onclick = function() {
    score++;
    document.getElementById("score").innerText = score;
    box.style.display = "none";
    showBox();
}

setInterval(showBox, 1500);
</script>

</body>
</html>