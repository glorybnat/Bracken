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
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=modermom_bracken', 'modermom_bracken', 'Bracken@2024');

if ( isset($_POST['delete']) && isset($_POST['id']) ) {
    $sql = "DELETE FROM writeup WHERE id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
}
?>
<html>
<head>
    <title>BLYAT</title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎵</text></svg>" />

    <style>
        body{
            background-image: url("/img/profile/aldrobi.jpg");
        }
    </style>
</head>
<body>
<table border="1">
<?php
$stmt = $pdo->query("SELECT * FROM writeup");
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo($row['id']);
    echo("</td><td>");
    echo($row['name']);
    echo("</td><td>");
    echo($row['title']);
    echo("</td><td>");
    echo($row['link']);
    echo("</td><td>");
    echo('<form method="post"><input type="hidden" ');
    echo('name="id" value="'.$row['id'].'">'."\n");
    echo('<input type="submit" value="Del" name="delete">');
    echo("\n</form>\n");
   echo("</td></tr>\n");
} ?>
</table>
<a href="writeups.php">back to Writeups page</a>
<br>
<a href="for_users.php">for users page</a>
</body>
</html>
