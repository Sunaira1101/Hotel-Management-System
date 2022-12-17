<?php
  
  require('admin/extra/func.php');
  require('admin/extra/connect.php');

  if(isset($_POST['signup'])){

    $data = filteration($_POST);

    if($data['pass'] != $data['cpass']){
        echo 'password not matching';
        exit;
    }

    //check if user exists or not

    $u_exist = select("SELECT * FROM `user_info` WHERE `email`=? AND `phonenum`=? LIMIT 1",[$data['email'],$data['phonenum']],"ss");

    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_registered_already' : 'phone_registered_already';
        exit;
    }





  }













?>