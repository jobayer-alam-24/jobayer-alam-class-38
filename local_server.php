<?php

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database_name = "library_management_system";

    try{
        $database_connection = new mysqli($serverName, $username, $password, $database_name);
    }
    catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
    

?>