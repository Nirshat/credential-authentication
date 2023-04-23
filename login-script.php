<?php
if(isset($_POST['login_btn'])){
    $username = charTrim($_POST['username']);
    $password = charTrim(sha1($_POST['password']));

    $query = $con->query("SELECT * FROM `credentials` WHERE `username`='$username' AND `password`='$password'");
    $creData = $query->fetch_assoc();
    $numCount = $query->num_rows; 

    if($numCount == 1){
        session_start();
        $_SESSION['access'] = $creData['password'];

        if(isset($_SESSION['access'])){
            header("Location: access.php");
        }
    }

    else{
        $_SESSION['loginStat'] = "Incorrect Username or Password. Please Try Again.<br><br>";
    }
}



function charTrim($char) {
    $char = trim($char);
    $char = stripslashes($char);
    $char = htmlspecialchars($char);
    return $char;
}
?>