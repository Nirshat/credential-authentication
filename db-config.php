<?php

function connectToDatabaseServer(){
    $host = ""; // localhost for scratch
    $username = ""; // username of server used
    $password = ""; // password of server used
    $database = ""; // name of database

    $config = new mysqli($host, $username, $password, $database);

    if($config->connect_error){
        echo $config->connect_error;
    }
    else{
        return $config;
    }
}


?>
