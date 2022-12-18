<?php
  
  require('admin/extra/func.php');
  require('admin/extra/connect.php');
  //require("sendgrid/sendgrid-php.php");

  // function send_mail($uemail,$name,$token){
      
  //     $email = new \SendGrid\Mail\Mail(); 
  //     $email->setFrom("fahrin.sunaira@northsouth.edu", "HOTEL MANAGEMENT");
  //     $email->setSubject("Account Verification Link");

  //     $email->addTo($uemail,$name);

  //     $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
  //     $email->addContent(
  //         "text/html", 
  //         "<strong>Click the link to confirm your email: </strong>
  //         <br>
  //         <a href='".SITE_URL."email_confirm.php?email=$uemail&token=$token"."'>
  //           CLICK
  //         </a>
  //         "
  //     );

  //     $sendgrid = new \SendGrid(SENDGRID_API_KEY); 
          
  //         try{
  //           $sendgrid->send($email);
  //           return 1;
  //         }
  //         catch(Exception $e){
  //           return 0;
  //         }
  // }

  if(isset($_POST['signup'])){

    $data = filteration($_POST);

    if($data['pass'] != $data['cpass']){
        echo 'password_mismatch';
        exit;
    }

    //check if user exists or not

    $u_exist = select("SELECT * FROM `user_info` WHERE `email`=? AND `phonenum`=? LIMIT 1",[$data['email'],$data['phonenum']],"ss");

    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_registered_already' : 'phone_registered_already';
        exit;
    }

    //send confirmation link

    // $token = bin2hex(random_bytes(16));

    // if(!send_mail($data['email'],$data['name'],$token)){
    //   echo 'mail_failed';
    //   exit;
    // }

    $enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT); //encrypt password

    $query = "INSERT INTO `user_info`(`name`, `email`, `phonenum`, `dob`, `address`, `password`) VALUES (?,?,?,?,?,?)";

    $values = [$data['name'],$data['email'],$data['phonenum'],$data['dob'],$data['address'],$enc_pass];

    if(insert($query,$values,'ssssss')){
      echo 1;
    }
    else{
      echo 'ins_failed'; //insertion query
    }
  }


  if(isset($_POST['login'])){

    $data = filteration($_POST);

    $u_exist = select("SELECT * FROM `user_info` WHERE `email`=? OR `phonenum`=? LIMIT 1",
    [$data['email_phone'],$data['email_phone']],"ss");

    if(mysqli_num_rows($u_exist)==0){
      echo 'inv_email_phone';     
    }
    else{
      $u_fetch = mysqli_fetch_assoc($u_exist);

      if($u_fetch['status']==0){
        echo 'user_inactive';
      }
      else{
        if(!password_verify($data['pass'],$u_fetch['password'])){
          echo 'invalid_password';
        }
        else{
          session_start();
          $_SESSION['login'] = true;
          $_SESSION['uId'] = $u_fetch['id'];
          $_SESSION['uName'] = $u_fetch['name'];
          $_SESSION['uPhone'] = $u_fetch['phonenum'];
          echo 1;
        }  
      }  
    }

    











  }













?>