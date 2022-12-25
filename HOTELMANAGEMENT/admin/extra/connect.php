<?php
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $database = "hotelmanagement";

    $db = mysqli_connect($host_name, $username, $password, $database);

    if(!$db){
        echo "Database not connected". mysqli_connect_error();
    }

    function filteration($data)
    {
        foreach($data as $key => $value)
        {
          $data[$key] = trim($value);
          $data[$key] = stripslashes($value);
          $data[$key] = htmlspecialchars($value);
          $data[$key] = strip_tags($value);
        
        }
        return $data;
    }

    function select($sql,$values,$datatypes)
    {
        $db=$GLOBALS['db'];
        if($stmt = mysqli_prepare($db,$sql))
        {
            mysqli_stmt_bind_param($stmt.$datatypes,...$values);
            if(mysqli_stmt_execute($stmt))
            {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else
            {
                mysqli_stmt_close($stmt);
                echo("Query cannot be executed - select");
            }
            
        }
        else 
        {
            echo("Query cannot be prepared - select");
        }






    
    }






?>