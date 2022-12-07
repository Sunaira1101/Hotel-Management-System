<?php
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $database = "hotelmanagement";

    $db = mysqli_connect($host_name, $username, $password, $database);

    if(!$db){
        echo "Database not connected". mysqli_connect_error();
    }

    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;
    }





?>