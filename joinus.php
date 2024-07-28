<?php
session_start();
@$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radare2 CTF</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/joinus.css" rel="stylesheet">
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
            if (isset($_SESSION['name'])){
                echo "<a href=\"profile.php\">$username</a>";
            }else{
                echo "<a href='login.php'>Login</a>";
            }
            ?> </a>
    </div>
        <div class="title">
            Comming soon :) <br> 
        </div>
    </div>
</body>
</html>
