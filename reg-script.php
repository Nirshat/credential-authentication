<?php
    include_once "db-config.php";
    $con = connectToDatabaseServer();


    // unique data proper iteration in database
    $special_query = $con->query("SELECT * from `credentials`");
    $data = $special_query->fetch_assoc();
    $num_data = $special_query->num_rows;

    if($num_data > 0){ // if database has one or more data...
      do{
          $all_num_data = $data['ref_num']; // lay out all the data
      } while($data = $special_query->fetch_assoc());

      do{
          $num_data += 1;
      } while($num_data == $all_num_data);
    }

    else{
        $num_data += 1;
    }
    // generate data until it has no duplicate

    $checkingstat = "";
    if(isset($_POST['reg_btn'])){
        $uniqueCredential = charTrim(sha1($_POST['password']));
        $duplicateQuery = $con->query("SELECT `password` FROM `credentials` WHERE `password`='$uniqueCredential'") or die ($con->error);
        $numOfPassword = $duplicateQuery -> num_rows; 

        if($numOfPassword > 0){
            $checkingstat = "Password is unavailable. <br><br>";
        }

        else{
            $ref_num = charTrim($num_data);
            $username = charTrim($_POST['username']);
            $password = charTrim(sha1($_POST['password']));
            $fullname = charTrim($_POST['fullname']);
    
            $query = $con->query("INSERT INTO `credentials`(`ref_num`, `username`, `password`, `fullname`) VALUES ('$ref_num', '$username', '$password', '$fullname') ");

            if($query){
                $_SESSION['regstat'] = "Registered Successfully ✅";
            }
        }
    }

    function charTrim($char) {
        $char = trim($char);
        $char = stripslashes($char);
        $char = htmlspecialchars($char);
        return $char;
    }
?>
