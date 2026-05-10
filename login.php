<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - PlayVerse</title>
</head>
<body>

<h1>Login</h1>

<form method="POST" action="login.php">

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>

<?php

session_start();
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password_hash"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            echo "Login successful! Welcome " . $user["username"];

        } else {
            echo "Wrong password!";
        }

    } else {
        echo "User not found!";
    }
}

?>