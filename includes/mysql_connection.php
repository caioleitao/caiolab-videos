<?php
    $database = new mysqli("localhost", "phpmyadmin", "[]/][", "clvideos_database");

    if($database->connect_errno){
        echo "Error to database connection";
        die();
    } 
?>
