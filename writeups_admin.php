<?php
session_start();

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=bracken', 'root', '');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $name = $_SESSION['name'];
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['picture']['name']);
        $uploadFile = $uploadDir . $fileName;

        // Check if the upload directory exists, if not, create it
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move the uploaded file to the server's upload directory
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadFile)) {
            // Prepare and execute the SQL statement to insert the data into the database
            $stmt = $pdo->prepare("INSERT INTO writeup (title, link, picture, name) VALUES (:title, :link, :picture, :name)");
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':link', $link, PDO::PARAM_STR);
            $stmt->bindParam(':picture', $uploadFile, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            echo "Write-up added successfully!";
        } else {
            echo "Failed to upload picture.";
        }
    } else {
        echo "No picture uploaded or an error occurred.";
    }
}


?>
<html>
<head>
    <title> Write ups management</title>
</head>
<body>
<form method="post">
    <label>Write up title</label>
    <br>
    <input type="text" name="title">
    <br>
    <label>Write up link</label>
    <br>
    <input type="text" name="link">
    <br>
    <label>Write up picture</label>
    <input type="file" name="picture" accept=".jpeg, .jpg, .png">
    <br>
    <input type="submit">
</form>
</body>
</html>
