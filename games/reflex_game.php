<?php
include '../includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reflex Game</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>

        .game-container{

            max-width:900px;
            margin:auto;
            padding:30px;
            text-align:center;
        }

        .stats{

            display:flex;
            justify-content:center;
            gap:40px;

            margin-bottom:20px;
        }

        .stat-box{

            background:#1f1f1f;
            padding:15px 25px;
            border-radius:12px;
            min-width:150px;
        }

        .stat-box h3{

            color:#00ffcc;
            margin-bottom:10px;
        }

        #game-area{

            width:100%;
            max-width:800px;
            height:500px;

            background:#1a1a1a;

            border:3px solid #00ffcc;

            border-radius:20px;

            margin:auto;

            position:relative;

            overflow:hidden;
        }

        #box{

            width:80px;
            height:80px;

            background:#00ffcc;

            border-radius:15px;

            position:absolute;

            display:none;

            cursor:pointer;

            transition:0.1s;
        }

        #box:hover{

            transform:scale(1.1);
        }

        #start-screen,
        #game-over-screen{

            position:absolute;

            width:100%;
            height:100%;

            background:rgba(0,0,0,0.9);

            display:flex;

            flex-direction:column;

            justify-content:center;
            align-items:center;

            z-index:10;
        }

        .game-btn{

            margin-top:20px;

            padding:15px 30px;

            border:none;

            border-radius:10px;

            background:#00ffcc;

            cursor:pointer;

            font-size:1rem;
        }

    </style>

</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="game-container">

    <h1>🎮 Reflex Game</h1>

    <div class="stats">

        <div class="stat-box">
            <h3>Score</h3>
            <p id="score">0</p>
        </div>

        <div class="stat-box">
            <h3>Time</h3>
            <p id="time">15</p>
        </div>

    </div>

    <div id="game-area">

        <div id="start-screen">

            <h2>Welcome to Reflex Game</h2>

            <button class="game-btn" onclick="startGame()">

                Start Game

            </button>

        </div>

        <div id="game-over-screen" style="display:none;">

            <h2>Game Over</h2>

            <p id="final-score"></p>

            <button class="game-btn" onclick="restartGame()">

                Play Again

            </button>

        </div>

        <div id="box"></div>

    </div>

</div>

<script src="../assets/js/reflex.js"></script>

</body>
</html>