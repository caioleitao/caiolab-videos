<?php
    $database = new mysqli("localhost", "user", "password", "database name");

    if($database->connect_errno){
        echo "Error to database connection";
        die();
    } 
?>
