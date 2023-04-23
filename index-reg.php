<?php
include "reg-script.php";

$regstat = "";
if(isset($_SESSION['regstat'])) {
    $regstat = $_SESSION['regstat'] . "<br>";
} else{}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="text" name="fullname" placeholder="Full Name"> <br>
        <button name="reg_btn">Register</button> <br><br>
        <span style="color:red"><?=$checkingstat;?></span>
        <span style="color:blue"><?=$regstat?></span>
        <span>Already Registered? <a href="index-login.php">Click here to Login</a></span>
    </form>
</body>
</html>