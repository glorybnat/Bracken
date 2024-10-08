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
    <link href="css/about.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="menu">
            <div class="burger-menu" id="burger-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="menu-links" id="menu-links">
                <a href="index.php">Home</a>
                <a href="about.php">About us</a>
                <a href="blog.php">Blog</a>
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
        </nav>
    </header>

    <main class="about-container">
        <section class="left-side">
            <h1>About Us</h1>
            <p>Welcome to Bracken, the premier CTF team from Zarqa University. As a group of dedicated cybersecurity enthusiasts, we have made our mark in the competitive world of Capture The Flag (CTF) contests, consistently securing top positions in numerous competitions.</p>

            <h2>Our Mission</h2>
            <p>At Bracken, our mission extends beyond winning competitions. We aim to foster a vibrant cybersecurity community through education, innovation, and mentorship. We believe in the power of knowledge-sharing and are dedicated to empowering others with the skills needed to excel in the field of cybersecurity.</p>

            <h3>Educational Lectures</h3>
            <p>Our experienced team members will be offering comprehensive lectures on various aspects of cybersecurity. Whether you are a beginner or an advanced practitioner, our sessions are designed to provide valuable insights and practical knowledge to help you grow.</p>
        </section>
        <section class="right-side">
            <h2>Our Journey</h2>
            <p>Our journey began with a shared passion for cybersecurity and a commitment to excellence. Over time, we have grown into a formidable team known for our strategic thinking, technical prowess, and collaborative spirit. Each member of Bracken brings a unique set of skills and experiences, making us a versatile and dynamic team.</p>

            <h3>CTF Challenges and Tournaments</h3>
            <p>Get ready for an adrenaline-pumping experience! We will be hosting a series of CTF challenges and tournaments in the near future. These events are designed to test your skills, enhance your problem-solving abilities, and provide an exciting platform for you to showcase your talent.</p>

            <h2>Join Us on Our Journey</h2>
            <p>We invite you to join us on this exciting journey as we explore the ever-evolving world of cybersecurity. Stay connected with us for updates on our upcoming lectures, challenges, and events. Together, we can create a safer and more secure digital world.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Bracken Team. All rights reserved.</p>
    </footer>

    <script>
        const burgerMenu = document.getElementById('burger-menu');
        const menuLinks = document.getElementById('menu-links');

        burgerMenu.addEventListener('click', () => {
            menuLinks.classList.toggle('active');
        });
    </script>
</body>
</html>
