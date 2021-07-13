<?php
    $database = new mysqli("localhost", "phpmyadmin", "password", "clvideos_database");

    if($database->connect_errno){
        echo "Error to database connection";
        die();
    } 
?>
