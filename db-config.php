<?php

function connectToDatabaseServer(){
    $host = "localhost";
    $username = "iamthedev";
    $password = "orenodatabase69";
    $database = "registration_and_authentication";

    $config = new mysqli($host, $username, $password, $database);

    if($config->connect_error){
        echo $config->connect_error;
    }
    else{
        return $config;
    }
}


?>