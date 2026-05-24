<?php

include 'includes/db.php';
include 'includes/auth.php';

$user_id = $_SESSION['user_id'];


// USER INFO
$userQuery = "SELECT * FROM users WHERE id = '$user_id'";

$userResult = $conn->query($userQuery);

$user = $userResult->fetch_assoc();


// USER STATS
$statsQuery = "

SELECT

    COUNT(*) AS total_games,

    MAX(score) AS best_score,

    AVG(score) AS average_score,

    SUM(score) AS total_score

FROM scores

WHERE user_id = '$user_id'

";

$statsResult = $conn->query($statsQuery);

$stats = $statsResult->fetch_assoc();


// LAST GAMES
$gamesQuery = "

SELECT

    games.title,
    scores.score,
    scores.created_at

FROM scores

JOIN games ON scores.game_id = games.id

WHERE scores.user_id = '$user_id'

ORDER BY scores.created_at DESC

LIMIT 5

";

$gamesResult = $conn->query($gamesQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - PlayVerse</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        .profile-container{

            max-width:1000px;

            margin:auto;

            padding:40px;
        }

        .profile-card{

            background:#1f1f1f;

            padding:30px;

            border-radius:20px;

            margin-bottom:30px;
        }

        .stats-grid{

            display:grid;

            grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));

            gap:20px;
        }

        .stat-card{

            background:#262626;

            padding:20px;

            border-radius:15px;

            text-align:center;
        }

        .stat-card h3{

            color:#00ffcc;

            margin-bottom:10px;
        }

        table{

            width:100%;

            border-collapse:collapse;

            margin-top:20px;
        }

        th, td{

            padding:15px;

            border-bottom:1px solid #444;

            text-align:center;
        }

        th{

            color:#00ffcc;
        }

    </style>

</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="profile-container">

    <div class="profile-card">

        <h1>👤 <?php echo $user['username']; ?></h1>

        <p>Welcome to your PlayVerse profile dashboard.</p>

    </div>


    <div class="stats-grid">

        <div class="stat-card">

            <h3>Total Games</h3>

            <p><?php echo $stats['total_games'] ?? 0; ?></p>

        </div>

        <div class="stat-card">

            <h3>Best Score</h3>

            <p><?php echo $stats['best_score'] ?? 0; ?></p>

        </div>

        <div class="stat-card">

            <h3>Average Score</h3>

            <p>

                <?php

                echo round($stats['average_score'] ?? 0, 2);

                ?>

            </p>

        </div>

        <div class="stat-card">

            <h3>Total Score</h3>

            <p><?php echo $stats['total_score'] ?? 0; ?></p>

        </div>

    </div>


    <div class="profile-card">

        <h2>🎮 Last 5 Games</h2>

        <table>

            <tr>

                <th>Game</th>

                <th>Score</th>

                <th>Date</th>

            </tr>

            <?php

            while($row = $gamesResult->fetch_assoc()){

                echo "<tr>";

                echo "<td>" . $row['title'] . "</td>";

                echo "<td>" . $row['score'] . "</td>";

                echo "<td>" . $row['created_at'] . "</td>";

                echo "</tr>";
            }

            ?>

        </table>

    </div>

</div>

</body>
</html>