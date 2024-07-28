<?php
session_start();
$username = $_SESSION['username'];
if ($_SESSION['loggedin'] !== true) {
    header('Location: login.php');
}
if ($_SESSION['verify edit'] !== true){
    header ("Location: verify_edit.php ");
}
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $gender = $_SESSION['gender'];
// database connection
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=bracken', 'root', '');
// Check if all required fields are set
    if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email'])
        && isset($_POST['phone']) && isset($_POST['password'])) {
        // Edit
        $sql = "UPDATE users SET username = :username, name = :name, email = :email, password = :password, phone = :phone
            WHERE username = '$username'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':username' => $_POST['username'],
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => md5($_POST['password']), // Hash the password
            ':phone' => $_POST['phone']));
        header('Location: profile.php');
    }
// old data for print it in the box for edit
    $select = $pdo->query("SELECT * FROM users WHERE username = '$username'");
    $row = $select->fetch(PDO::FETCH_ASSOC);
    $old_username = $row['username'];
    $old_name = $row['name'];
    $old_email = $row['email'];
    $old_phone = $row['phone'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div class="menu">
        <div class="logo">
            <a href="index.php">Br4cken</a>
        </div>
        <div class="menu-links">
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
        <div class="burger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="profile-container">
        <?php
        if (@$gender == 'Male'){
            echo "<div class=\"profile-photo\" id=\"profile-photo\" style=\"background-image: url('img/profile/male-profile-picture.jpg');\"></div>";
        }
        else{
            echo "<div class=\"profile-photo\" id=\"profile-photo\" style=\"background-image: url('img/profile/female-profile-picture.jpg');\"></div>";
        }
        ?>
        <div class="profile-info">
            <h2 id="username"><?php echo @$old_username ?></h2>
            <h3 id="name"><?php echo @$old_name ?></h3>
            <!-- <p id="bio">This is a short bio.</p> -->
        </div>
        <button class="edit-button" id="edit-button">Edit</button>
        <button  name="logout" class="logout-button" id="logout-button"><a href="logout.php">Logout</a></button>
    </div>

    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <form method="post">
                <span class="modal-close" id="modal-close">&times;</span>
                <h2>Edit Profile</h2>
                <input type="text" name="username" id="edit-username" placeholder="Username" value="<?php echo $old_username?>" required>
                <input type="text" name="name" id="edit-name" placeholder="Full Name" value="<?php echo $old_name?>" required>
                <!-- <input type="text" name="edit-bio" id="edit-bio" placeholder="Bio"> -->
                <input type="email" name="email" id="edit-email" placeholder="Email" value="<?php echo $old_email?>" required>
                <input type="tel" name="phone" id="edit-phone" placeholder="Phone Number" value="<?php echo $old_phone?>" required>
                <input type="password" name="password" id="edit-pass" placeholder="New Password" required>
                <button type="submit" value="Save" id="save-button">Save</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        © 2024 Bracken. All rights reserved.
    </footer>

    <script>
        document.querySelector('.burger-menu').addEventListener('click', function () {
            document.querySelector('.menu-links').classList.toggle('active');
        });

        // Modal functionality
        const editButton = document.getElementById('edit-button');
        const editModal = document.getElementById('edit-modal');
        const closeModal = document.getElementById('modal-close');
        const saveButton = document.getElementById('save-button');

        let gender = 'male'; // Assume gender is set by the server and can't be changed

        const profilePhoto = document.getElementById('profile-photo');
        const profilePics = {
            male: 'img/profile/male-profile-picture.jpg',
            female: 'img/profile/female-profile-picture.jpg'
        };

        editButton.addEventListener('click', () => {
            editModal.style.display = 'flex';
        });

        closeModal.addEventListener('click', () => {
            editModal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target == editModal) {
                editModal.style.display = 'none';
            }
        });



    </script>
</body>

</html>
