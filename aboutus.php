<?php
session_start();
@$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Br4cken CTF</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/aboutus.css" rel="stylesheet">
    <link href="css/team.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.scss">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style>
        /* Additional styles for the page */
        .about-section,
        .mission-section,
        .lectures-section,
        .team-section,
        .contact-section {
            margin: 2rem 0;
            text-align: center;
        }

        .team-section .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .profile-wrapper {
            flex-basis: calc(50% - 2rem);
            /* Two cards per row */
        }
    </style>
</head>

<body>
    <div class="menu" style="font-family: 'Candara', cursive;">
        <div class="logo" style="font-family: 'Press Start 2P', cursive;">
            <a href="index.php">Bracken</a>
        </div>
        <div class="menu-links" style="font-family: 'Press Start 2P', cursive;">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="writeups.php">Write ups</a>
            <a href="courses.php">Courses</a>
            <a href="ctf.php">CTF</a>
            <a href="#">Join Us</a>
                <?php
                if (isset($_SESSION['name'])){
                    echo "<a href=\"profile.php\">$username</a>";
                }else{
                    echo "<a href='login.php'>Login</a>";
                }
                ?>
        </div>
        <div class="burger-menu" style="font-family: 'Press Start 2P', cursive;">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="page-container">
        <div class="content" style="font-family: 'Press Start 2P', cursive;">
            <div class="about-section" style="font-family: 'Press Start 2P', cursive;">
                <h2>About Us</h2>
                <div style="font-family: 'Candara', cursive; font-weight: bolder;">
                    <p>Welcome to Bracken, the premier CTF team from Zarqa University. As a group of dedicated
                        cybersecurity enthusiasts, we have made our mark in the competitive world of Capture The Flag
                        (CTF) contests, consistently securing top positions in numerous competitions.</p>
                </div>
            </div>

            <div class="mission-section" style="font-family: 'Press Start 2P', cursive;">
                <h2>Our Mission</h2>
                <div style="font-family: 'Candara', cursive; font-weight: bolder;">
                    <p>At Bracken, our mission extends beyond winning competitions. We aim to foster a vibrant
                        cybersecurity community through education, innovation, and mentorship. We believe in the power
                        of knowledge-sharing and are dedicated to empowering others with the skills needed to excel in
                        the field of cybersecurity.</p>
                </div>
            </div>
            <div class="lectures-section" style="font-family: 'Press Start 2P', cursive;">
                <h2>Educational Lectures</h2>
                <div style="font-family: 'Candara', cursive; font-weight: bolder;">
                    <p>Our experienced team members will be offering comprehensive lectures on various aspects of
                        cybersecurity. Whether you are a beginner or an advanced practitioner, our sessions are designed
                        to provide valuable insights and practical knowledge to help you grow.</p>
                </div>
            </div>
            <div class="team-section" style="font-family: 'Press Start 2P', cursive;">
                <h2>Our Team</h2>
                <div class="container" style="font-family: 'Press Start 2P', cursive;">
                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Ahmad_Bilide.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ahmad-bilide/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>AHMAD BILIDE</h2>
                                <div class="profile-bio">
                                    I'm a JavaScript full-stack engineer, love working with <em>React</em> and
                                    <em>Node.js</em>.
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Majd_Banat.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/majban/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>MAJD BANAT</h2>
                                <div class="profile-bio">
                                    Expert in reverse engineering and vulnerability analysis; excels in CTF challenges.
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Mutasem_Mustafa.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mutasem-mustafa-8750002b0/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>MUTASEM MUSTAFA</h2>
                                <div class="profile-bio">
                                    Back-End Developer and Web Application Security.
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Salam_Sartawi.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/salam-sartawi-a2615324a/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>SALAM SARTAWI</h2>
                                <div class="profile-bio">
                                    I'm a JavaScript full-stack engineer, love working with <em>React</em> and
                                    <em>Node.js</em>.
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Mousa_Almaharmeh.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mousa-almaharmeh-6173192a3/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>MOUSA ALMAHARMEH</h2>
                                <div class="profile-bio">
                                    Interested in the field of digital forensics and OSINT, and I am a specialized
                                    lecturer in cybersecurity and its related topics.
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Ayoub_Droubi.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/ayoubdroubi/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>AYOUB DROUBI</h2>
                                <div class="profile-bio">
                                    Code hunter، crack complex codes and win the glory of CTF.
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Mohammad_Tawalbeh.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/tawallbeh1/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>MOHAMMAD TAWALBEH</h2>
                                <div class="profile-bio">
                                    Specialist in web security, cryptography, reverse engineering, and OSINT.
                                    "Joker🃏”.
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="profile-wrapper">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/team_pics/Theeb_Alaridy.jpg" alt="Profile">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <!-- <a href="mailto:example@bracken.team" title="Email"></a> -->
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/theeb-al-aridy-0ba459320/" title="Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M8 11l0 5"></path>
                                            <path d="M8 8l0 .01"></path>
                                            <path d="M12 16l0 -5"></path>
                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-name">
                                <h2>THEEB ALARIDY</h2>
                                <div class="profile-bio">
                                    I can dismantle a system to find out how it works.
                                </div>
                            </div>
                        </div>
                    </div>







                    <!-- Repeat profile-wrapper for additional profiles -->
                </div>

            </div>
            <div class="contact-section" style="font-family: 'Press Start 2P', cursive;">
                <h2>Contact Us</h2>
                <div style="font-family: 'Candara', cursive; font-weight: bolder;">
                    <p>If you have any questions, comments, or suggestions, we'd love to hear from you! Feel free to
                        reach out to us via the following methods: </p>


                </div>
            </div>
        </div>
    </div>

    <footer class="footer" style="font-family: 'Press Start 2P', cursive;">
        © 2024 Bracken. All rights reserved.
    </footer>

    <script>
        document.querySelector('.burger-menu').addEventListener('click', function () {
            document.querySelector('.menu-links').classList.toggle('active');
        });
    </script>
</body>

</html>