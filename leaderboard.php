<?php

include 'includes/db.php';
include 'includes/auth.php';

// TOP SCORES QUERY
$sql = "

SELECT

    users.username,

    games.title,

    MAX(scores.score) AS best_score,

    MAX(scores.created_at) AS latest_date

FROM scores

JOIN users ON scores.user_id = users.id

JOIN games ON scores.game_id = games.id

GROUP BY users.id, games.id

ORDER BY best_score DESC

LIMIT 10

";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard - PlayVerse</title>

    <style>

        body{
            font-family: Arial;
            text-align: center;
            background-color: #f4f4f4;
        }

        table{

            margin: auto;
            border-collapse: collapse;
            width: 70%;
            background: white;
        }

        th, td{

            border: 1px solid black;
            padding: 12px;
        }

        th{

            background-color: black;
            color: white;
        }

        tr:nth-child(even){

            background-color: #f2f2f2;
        }

    </style>
</head>
<body>

<h1>🏆 PLAYVERSE LEADERBOARD</h1>

<table>

<tr>

    <th>Rank</th>
    <th>Username</th>
    <th>Game</th>
    <th>Score</th>
    <th>Date</th>

</tr>

<?php

$rank = 1;

while($row = $result->fetch_assoc()){

    echo "<tr>";

    echo "<td>" . $rank . "</td>";

    echo "<td>" . $row['username'] . "</td>";

    echo "<td>" . $row['title'] . "</td>";

    echo "<td>" . $row['best_score'] . "</td>";

    echo "<td>" . $row['latest_date'] . "</td>";

    echo "</tr>";

    $rank++;
}

?>

</table>

</body>
</html>