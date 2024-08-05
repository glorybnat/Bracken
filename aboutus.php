<?php
session_start();
@$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🧏</text></svg>" />

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/aboutus.css" rel="stylesheet">
    <link href="css/team.css" rel="stylesheet">
    <link rel="stylesheet" href="css/social.css">
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
            <a href="/">Bracken</a>
        </div>
        <div class="menu-links" style="font-family: 'Press Start 2P', cursive;">
            <a href="/">Home</a>
            <a href="aboutus.php">About</a>
            <a href="writeups.php">WriteUps</a>
            <a href="courses.php">Courses</a>
            <a href="ctf.php">CTF</a>
            <a href="joinus.php">Join</a>
            <?php
            if (isset($_SESSION['name'])) {
                echo "<a href=\"profile.php\">$username</a>";
            } else {
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
                                    <a href="https://www.linkedin.com/in/ahmad-bilide/" target="_blank"
                                        title="Linkedin">
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
                                    Master in cracking codes and uncovering hidden digital clues.
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

                    <!-- LinkedIn Icon -->
                    <a class="social-link" href="https://linkedin.com/company/bracken-team" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42" class="social about-social-links"
                            viewBox="0 0 448 512">
                            <path fill="#fff"
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg>
                    </a>

                    <!-- instagram Icon -->
                    <a class="social-link" href="https://instagram.com/brackenteam" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42" class="social about-social-links"
                            viewBox="0 0 448 512">
                            <path fill="#ffffff"
                                d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer" style="font-family: 'Press Start 2P', cursive;">
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
</script>

</html>