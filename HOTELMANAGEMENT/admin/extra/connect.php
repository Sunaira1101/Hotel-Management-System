<?php
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $database = "hotelmanagement";

    $db = mysqli_connect($host_name, $username, $password, $database);

    if(!$db){
        echo "Database not connected". mysqli_connect_error();
    }





?>