function saveScore(score) {
    fetch("save_score.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "score=" + score + "&game_id=1"
    });
}