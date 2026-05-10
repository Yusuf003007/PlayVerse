<?php
include 'includes/db.php';
include 'includes/auth.php';

$user_id = $_SESSION["user_id"];
$score = $_POST["score"];
$game_id = $_POST["game_id"];

$sql = "INSERT INTO scores (user_id, game_id, score)
        VALUES ('$user_id', '$game_id', '$score')";

$conn->query($sql);
?>