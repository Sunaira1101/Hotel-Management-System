<?php
  
  require('admin/extra/func.php');
  require('admin/extra/connect.php');
  require("sendgrid/sendgrid-php.php");

  function send_mail($email,$name,$token){
      
      $email = new \SendGrid\Mail\Mail(); 
      $email->setFrom("fahrin.sunaira@northsouth.edu", "HOTEL MANAGEMENT");
      $email->setSubject("Account Verification Link");

      $email->addTo($email,$name);

      $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
      $email->addContent(
          "text/html", 
          "<strong>Click the link to confirm your email: </strong>
          <br>
          <a href='".SITE_URL."email_confirm.php?email=$email&token=$token"."'>
            CLICK
          </a>
          "
      );
      
      $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
      try {
          $response = $sendgrid->send($email);
          print $response->statusCode() . "\n";
          print_r($response->headers());
          print $response->body() . "\n";
      } catch (Exception $e) {
          echo 'Caught exception: '. $e->getMessage() ."\n";
      }

    }



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

    //send confirmation link

    $token = bin2hex(random_bytes(16));
    send_mail($data['email'],$data['name'],$token);







  }













?>