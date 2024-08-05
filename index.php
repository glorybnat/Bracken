<?php
session_start();
@$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracken</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>👾</text></svg>" />

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/Home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.css">
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
        Welcome to Bracken <br><br>

        <!-- LinkedIn Icon -->
        <a class="social-link" href="https://linkedin.com/company/bracken-team" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="42" class="social" viewBox="0 0 448 512">
                <path fill="#fff"
                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
        </a>

        <!-- instagram Icon -->
        <a class="social-link" href="https://instagram.com/brackenteam" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="42" class="social" viewBox="0 0 448 512">
                <path fill="#ffffff"
                    d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z" />
            </svg>
        </a>
    </div>

    <div class="posts-container">
        <!-- Example of 6 posts -->
        <a href="https://www.instagram.com/p/C92IAELN6IT/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
            <div class="post"
                data-title="Bracken's team in the first CTF competition at Zarqa University, achieving second place. 🥈">
                <img src="img/posts/Bracken_in_zu_2024.jpg" alt="Bracken in zu 2024">
            </div>
        </a>
        <div class="post" data-title="Post 2">
            <img src="img/logo.png" alt="Post 2">
        </div>
        <div class="post" data-title="Post 3">
            <img src="img/logo.png" alt="Post 3">
        </div>
        <div class="post" data-title="Post 4">
            <img src="img/logo.png" alt="Post 4">
        </div>
        <div class="post" data-title="Post 5">
            <img src="img/logo.png" alt="Post 5">
        </div>
        <div class="post" data-title="Post 6">
            <img src="img/logo.png" alt="Post 6">
        </div>
    </div>


    <footer class="footer">
        © 2024 Bracken. All rights reserved.
    </footer>

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


    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            document.body.classList.add('loaded');
        }, 500); // Delay to show the scroll animation
    });
</script>

</html>