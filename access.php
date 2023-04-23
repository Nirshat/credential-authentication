<?php
  // This will prevent the user to access the system to ensure that they must login first
  if(empty($_SESSION['access'])){
    session_start(); // if the user login successfully, session will start
  }
  if(isset($_SESSION['access'])){
  } // if the session has already started, nothing happens
  else{
    header("Location: index-login.php");
  } // redirect to login page if session is not yet set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acess</title>
</head>
<body>
    <h1>Welcome!</h1>
    <a href="logout-script.php">Logout</a>


    <!-- Block browser's previous button -->
    <script>
    history.pushState({ page: 1 }, "title 1", "#nbb");
    window.onhashchange = function (event) {
        window.location.hash = "nbb";
    };  
    </script>
</body>
</html>