<?php
session_start();
if ($_SESSION['loggedin'] !== true){
    header ("Location: login.php ");
}
@$password = md5($_POST['password']);
if (isset($_POST['password'])){
    if ($password == $_SESSION['password']){
        $_SESSION['verify edit'] = true;
        header("Location: profile.php");
    }
    else{
        echo "<p style='
    position: absolute;
    left: 41%;
    top: 1%;
    color: white;
    background-color: darkred;
    width: 300px;
    height: 45px;
    border-color: darkred;
    border-style: solid;
    border-radius: 5px;
    text-align: center;
    padding-top: 12px;
    font-size: 18px;'>Wrong password</p>";
    }
}
?>
<html>
<head>
    <title>Verify</title>

</head>
<body>
<div>
    <form method="post">
        <p class="verify_text">To verify please enter your password</p>
        <input type="password" name="password">
        <br>
        <input class="submit" type="submit" value="Enter">
    </form>
</div>
</body>
</html>

