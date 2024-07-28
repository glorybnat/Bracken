<?php
// session start
session_start();
// Authentication
if (@$_SESSION['loggedin'] === true){
    header('Location: profile.php');
}
// database connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=bracken', 'root', '');
//
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Convert the username to lowercase
    $username = strtolower($_POST['username']);
    $password = md5($_POST['password']);
    // Prepare the SQL statement
    $sql = "SELECT id, name, username, email, phone, password, gender FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // Login if statement
    if ($row && $row['username'] == $username && $row['password'] == $password) {
        // Start the session save
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['password'] = $password;
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['loggedin'] = true;
        // Admins
        if (in_array($_SESSION['username'], ['gazawi', 'glory', 'm_f5m', 'sartawi','bilide','tawalbeh1'])) {
            $_SESSION['admin'] = true;
        }

        header('Location: index.php');
        exit; // Always exit after a header redirect
    } else {
// Handle invalid login
$Invalid_username_or_password = "Invalid username or password.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Radare2 CTF</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="menu">
    <a href="index.php">Home</a>
    <a href="about.php">About us</a>
    <a href="blog.html">Blog</a>
    <a href="writeups.php">Write ups</a>
    <a href="courses.php">Courses</a>
    <a href="ctf.php">CTF</a>
    <a href="#">Join Us</a>
    <a> <?php
        if (@$_SESSION['loggedin'] !== true){
        echo "<a href=\"login.php\">Login</a>";
        }else{
        echo "<a href='profile.php'>$username</a>";
        }
        ?> </a>
</div>

<div class="login-container">
    <h1>Login</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <?php echo @$Invalid_username_or_password ?>
        <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account?</p>
            <a href="register.php" class="register-button">Register</a>
        </div>
    </div>

    <footer>
        © 2024 Bracken. All rights reserved.
    </footer>
</body>
</html>
