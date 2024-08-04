<?php
session_start();
@$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>➕</text></svg>" />

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/joinus.css">
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

    <div class="title">
        Comming soon :) <br>
    </div>

    <footer class="footer">
        © 2024 Bracken. All rights reserved.
    </footer>
</body>

<script>
    document.querySelector('.burger-menu').addEventListener('click', function () {
        document.querySelector('.menu-links').classList.toggle('active');
    });

    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            document.body.classList.add('loaded');
        }, 500); // Delay to show the scroll animation
    });
</script>

</html>