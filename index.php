<?php
include 'includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PlayVerse</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        /* HERO */

        .hero{

            min-height:90vh;

            display:flex;

            flex-direction:column;

            justify-content:center;
            align-items:center;

            text-align:center;

            padding:40px;
        }

        .hero h1{

            font-size:5rem;

            color:#00ffcc;

            margin-bottom:20px;
        }

        .hero p{

            max-width:800px;

            font-size:1.3rem;

            line-height:1.8;

            margin-bottom:30px;
        }

        .hero-buttons{

            display:flex;

            gap:20px;

            flex-wrap:wrap;

            justify-content:center;
        }

        .hero-btn{

            padding:15px 30px;

            border:none;

            border-radius:12px;

            background:#00ffcc;

            color:black;

            font-size:1rem;

            cursor:pointer;

            transition:0.3s;
        }

        .hero-btn:hover{

            transform:scale(1.05);
        }


        /* FEATURED GAMES */

        .featured{

            padding:80px 40px;
        }

        .featured h2{

            text-align:center;

            margin-bottom:50px;

            font-size:3rem;
        }

        .games-grid{

            display:grid;

            grid-template-columns:repeat(auto-fit, minmax(300px,1fr));

            gap:30px;

            max-width:1200px;

            margin:auto;
        }

        .game-card{

            background:#1f1f1f;

            padding:30px;

            border-radius:20px;

            transition:0.3s;

            text-align:center;
        }

        .game-card:hover{

            transform:translateY(-10px);
        }

        .game-card h3{

            color:#00ffcc;

            margin-bottom:20px;
        }

        .game-card p{

            line-height:1.6;

            margin-bottom:20px;
        }

        .play-btn{

            padding:12px 25px;

            border:none;

            border-radius:10px;

            background:#00ffcc;

            cursor:pointer;
        }


        /* QUICK STATS */

        .quick-links{

            padding:80px 40px;

            text-align:center;
        }

        .quick-links h2{

            margin-bottom:40px;

            font-size:3rem;
        }

        .quick-grid{

            display:grid;

            grid-template-columns:repeat(auto-fit, minmax(250px,1fr));

            gap:25px;

            max-width:1000px;

            margin:auto;
        }

        .quick-card{

            background:#1f1f1f;

            padding:30px;

            border-radius:20px;

            transition:0.3s;
        }

        .quick-card:hover{

            transform:scale(1.03);
        }

        .quick-card h3{

            color:#00ffcc;

            margin-bottom:15px;
        }

        .quick-card button{

            margin-top:20px;

            padding:12px 20px;

            border:none;

            border-radius:10px;

            background:#00ffcc;

            cursor:pointer;
        }


        /* FOOTER */

        footer{

            margin-top:80px;

            background:#1a1a1a;

            padding:30px;

            text-align:center;

            color:#888;
        }


        /* MOBILE */

        @media(max-width:768px){

            .hero h1{

                font-size:3rem;
            }

            .hero p{

                font-size:1rem;
            }

            .featured h2,
            .quick-links h2{

                font-size:2rem;
            }
        }

    </style>

</head>
<body>

<?php include 'includes/header.php'; ?>


<!-- HERO -->

<section class="hero">

    <h1>PLAYVERSE</h1>

    <p>

        A web-based mini game platform where players can compete,
        improve their scores, and enjoy browser games with a modern experience.

    </p>

    <div class="hero-buttons">

        <button class="hero-btn"

        onclick="window.location.href='games.php'">

            🎮 Explore Games

        </button>

        <button class="hero-btn"

        onclick="window.location.href='leaderboard.php'">

            🏆 Leaderboard

        </button>

    </div>

</section>


<!-- FEATURED GAMES -->

<section class="featured">

    <h2>Featured Games</h2>

    <div class="games-grid">

        <div class="game-card">

            <h3>⚡ Reflex Game</h3>

            <p>

                Test your reflexes and reaction speed
                before the timer runs out.

            </p>

            <button class="play-btn"

            onclick="window.location.href='games/reflex_game.php'">

                Play Now

            </button>

        </div>


        <div class="game-card">

            <h3>🧠 Memory Game</h3>

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

</section>


<!-- QUICK ACCESS -->

<section class="quick-links">

    <h2>Quick Access</h2>

    <div class="quick-grid">

        <div class="quick-card">

            <h3>👤 Your Profile</h3>

            <p>

                Check your statistics, scores,
                and recent game activity.

            </p>

            <button onclick="window.location.href='profile.php'">

                View Profile

            </button>

        </div>


        <div class="quick-card">

            <h3>🏆 Leaderboard</h3>

            <p>

                Compete with other players
                and climb the rankings.

            </p>

            <button onclick="window.location.href='leaderboard.php'">

                Open Leaderboard

            </button>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <p>

        © 2026 PlayVerse | Web-Based Game Platform Project

    </p>

</footer>

</body>
</html>