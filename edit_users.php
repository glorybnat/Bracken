<?php
session_start();
if ($_SESSION['loggedin'] !== true) {
    header('Location: writeup.php');
}
if ($_SESSION['admin'] !== true) {
    header('Location: writeup.php');
}
if ($_SESSION['mutasem_is_host'] !== true) {
    header('Location: writeups.php');
}
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=bracken', 'root', '');

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
    $username = $_POST['username'];
    $sql = "UPDATE users SET username = :username, password = :password, email = :email
            WHERE username = '$username'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':username' => $username,
        ':password' => md5($_POST['password']),
        ':email' => $_POST['email']));
    header('Location: for_users.php');
}

?>
<html>
<head>
    <title>Hi</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>😶</text></svg>" />

</head>
<body>
    <form method="post">
        <label>user</label>
        <br>
        <input type="text" name="username">
        <br>
        <label>password</label>
        <br>
        <input type="text" name="password">
        <br>
        <label>email</label>
        <br>
        <input type="text" name="email">
        <br>
        <input type="submit">
    </form>
</body>
</html>
