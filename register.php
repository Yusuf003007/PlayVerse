<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // password hash (çok önemli!)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query
    $sql = "INSERT INTO users (username, email, password_hash)
            VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PlayVerse</title>
</head>
<body>

    <h1>Register</h1>

    <form action="register.php" method="POST">

        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>

    </form>

</body>
</html>