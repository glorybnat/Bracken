<?php
session_start();
@$username = $_SESSION['username'];
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=bracken', 'root', '');
$select = $pdo->query("SELECT * FROM writeup ");
$row = $select->fetch(PDO::FETCH_ASSOC);
$title = $row['title'];
$link = $row['link'];
$picture = $row['picture'];
$name = $row['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracken Writeups</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/writeups.css" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <div class="logo">
            <a href="Home.html">Br4cken</a>
        </div>
        <div class="menu-links">
            <a href="index.php">Home</a>
            <a href="about.php">About us</a>
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
            ?>
        </div>
        <div class="burger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <a style="margin-top: 100px" href="writeups_admin.php"><button>Write ups management</button></a>
    <div class="writeups-container">
        <div class="writeup-box">
            <?php
            foreach ($row as $k => $v){
            ?>
            <img src="<?php echo htmlspecialchars($picture, ENT_QUOTES, 'UTF-8'); ?>" alt="Writeup 1">
            <div class="writeup-content">
                <h3><?php echo $title ?></h3>
                <p>Author: <?php echo $name?></p>
                <a href="<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" class="read-more-button">Read more</a>
                <?php } ?>
            </div>
        </div>
        <!-- Add more writeup boxes as needed -->
    </div>

    <footer class="footer">
        © 2024 Bracken. All rights reserved.
    </footer>

    <script>
        document.querySelector('.burger-menu').addEventListener('click', function () {
            document.querySelector('.menu-links').classList.toggle('active');
        });
    </script>
</body>
</html>
