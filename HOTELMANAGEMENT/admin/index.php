<?php 
require('extra/func.php');
require('extra/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>

    <?php require('extra/links.php'); ?>

<style>
    .logininfo{          /*or div.logininfo */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }

    .pop:hover{
        transform: scale(1.05);
        transition: all 0.3s;
    }


</style>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

    <div class="logininfo text-center bg-white rounded shadow overflow-hidden">
        <form method="POST">
            <h2 class="text-white py-3" style="background-color:rgb(95, 16, 16); ">ADMIN LOGIN</h2>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-3">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white btn-dark shadow-none pop">LOGIN</button>
            </div>


        </form>
 </div>

 <?php
   if(isset($_POST['login']))
   {
    $dt = filteration($_POST);

    $query = "SELECT * FROM `admin_info` WHERE `admin_name`=? AND `admin_pass`=?";
    $values = [$dt['admin_name'],$dt['admin_pass']];

    $res = select($query, $values, "ss");
    

    if($res->num_rows==1){
        echo "login done";
    }
    else{
        alert('error', 'Login failed - please try again!');
    }
    
   }


?>
    



<?php require('extra/scripts.php'); ?>

</body>
</html>