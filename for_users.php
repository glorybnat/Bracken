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
if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $sql = "DELETE FROM writeup WHERE id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
}
?>
<html>
<head>
    <title>SUKA :)</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>👽</text></svg>" />

</head>
<body>
<form method="post">
    <label>Enter username:</label>
    <br>
    <input type="text" name="username">
    <input type="submit" name="show" value="show">
</form>
<?php
if (isset($_POST['username']) && isset($_POST['show'])){
    $username = $_POST['username'];
    $select = $pdo->query("SELECT id, name, username, phone, email, gender FROM users WHERE username = '$username'");
    $row = $select->fetch(PDO::FETCH_ASSOC);
    echo "<table border = \"1\">";
    foreach ($row as $k => $v){
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table>";
}
?>
<br>
<a href="edit_users.php">Edit users</a>
<br>
<a href="writeups.php">back to Writeups page</a>
<p>---------------------------------</p>
<table border="1">
    <?php
    $stmt = $pdo->query("SELECT * FROM users");
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        echo "<tr><td>";
        echo($row['id']);
        echo("</td><td>");
        echo($row['username']);
        echo("</td><td>");
        echo($row['name']);
        echo("</td><td>");
        echo($row['email']);
        echo("</td><td>");
        echo($row['phone']);
        echo("</td><td>");
        echo($row['gender']);
        echo("</td><td>");
        echo('<form method="post"><input type="hidden" ');
        echo('name="id" value="'.$row['id'].'">'."\n");
        echo('<input type="submit" value="Del" name="delete">');
        echo("\n</form>\n");
        echo("</td></tr>\n");
    } ?>
</table>
</body>
</html>
