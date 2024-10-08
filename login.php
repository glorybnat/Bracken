<?php
// session start
session_start();
// Authentication
if (@$_SESSION['loggedin'] === true) {
    header('Location: profile.php');
}
// database connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=modermom_bracken', 'modermom_bracken', 'Bracken@2024');
// Check if username and password are set
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
        if (in_array($_SESSION['username'], ['gazawi', 'glory', 'm_f5m', 'sartawi', 'bilide', 'tawallbeh1'])) {
            $_SESSION['admin'] = true;
        }
        //host
        if ($_SESSION['id'] == '1') {
            $_SESSION['mutasem_is_host'] = true;
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
    <title>Login</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>👤</text></svg>" />

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <div class="menu">
        <div class="logo">
            <a href="/">Bracken</a>
        </div>
        <div class="menu-links">
            <a href="/">Home</a>
            <a href="aboutus.php">About</a>
            <a href="writeups.php">WriteUps</a>
            <a href="courses.php">Courses</a>
            <a href="https://ctf.bracken.team">CTF</a>
            <a href="joinus.php">Join</a>
            <?php
            if (isset($_SESSION['name'])) {
                echo "<a href=\"profile.php\">$username</a>";
            } else {
                echo "<a href='login.php'>Login</a>";
            }
            ?>
        </div>
        <div class="burger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="login-container">
        <h1>Login</h1>
        <form method="post">
            <input type="text" id="username" name="username" placeholder="Username" required>

            <input type="password" id="password" name="password" placeholder="Password" required>

            <p id="error-message" style="font-size: xx-small;color: red;"><?php echo @$Invalid_username_or_password; ?>
            </p>

            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account?</p>
            <a href="register.php" class="register-button">Register</a>
        </div>
    </div>

    <div class="footer">
        © 2024 Bracken. All rights reserved.
    </div>
</body>
<script>
    document.querySelector('.burger-menu').addEventListener('click', function () {
        document.querySelector('.menu-links').classList.toggle('active');
    });

    document.addEventListener('click', function (event) {
        const menuLinks = document.querySelector('.menu-links');
        const burgerMenu = document.querySelector('.burger-menu');

        if (!menuLinks.contains(event.target) && !burgerMenu.contains(event.target)) {
            menuLinks.classList.remove('active');
        }
    });
</script>


</html>