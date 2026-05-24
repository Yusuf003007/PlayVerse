<?php
include 'includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Games - PlayVerse</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        .games-container{

            max-width:1200px;

            margin:auto;

            padding:40px;
        }

        .games-grid{

            display:grid;

            grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));

            gap:30px;

            margin-top:40px;
        }

        .game-card{

            background:#1f1f1f;

            border-radius:20px;

            padding:30px;

            text-align:center;

            transition:0.3s;
        }

        .game-card:hover{

            transform:translateY(-10px);
        }

        .game-card h2{

            color:#00ffcc;

            margin-bottom:20px;
        }

        .game-card p{

            margin-bottom:20px;

            line-height:1.6;
        }

        .play-btn{

            padding:12px 25px;

            border:none;

            border-radius:10px;

            background:#00ffcc;

            cursor:pointer;

            font-size:1rem;
        }

    </style>

</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="games-container">

    <h1>🎮 PlayVerse Games</h1>

    <div class="games-grid">

        <!-- REFLEX GAME -->

        <div class="game-card">

            <h2>⚡ Reflex Game</h2>

            <p>

                Test your reflexes and click the moving box
                as fast as possible before time runs out.

            </p>

            <button class="play-btn"

            onclick="window.location.href='games/reflex_game.php'">

                Play Now

            </button>

        </div>


        <!-- MEMORY GAME -->

        <div class="game-card">

            <h2>🧠 Memory Game</h2>

            <p>

                Match all card pairs using your memory
                with the fewest moves possible.

            </p>

            <button class="play-btn"

            onclick="window.location.href='games/memory_game.php'">

                Play Now

            </button>

        </div>

    </div>

</div>

</body>
</html>