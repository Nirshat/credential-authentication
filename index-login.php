<?php
include_once "db-config.php";
$con = connectToDatabaseServer();
include "login-script.php";

$statMsg = "";
if(isset($_SESSION['loginStat'])){
    $statMsg = $_SESSION['loginStat'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <button name="login_btn">Login</button> <br><br>
        <span style="color:red"><?=$statMsg?></span>
        <span>Dont have an account? <a href="index-reg.php">Click here to Register</a></span>
    </form>


</body>
</html>