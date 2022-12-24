<?php 
       $contact_q = "SELECT * FROM `contact_info` WHERE `C_ID`=?";
       $values = [1];
       $contact_res = mysqli_fetch_assoc(select($contact_q,$values,'i'));
      
  ?>


<div class="container-fluid col-12 bg-light mt-5 border-top border-2 border-dark" style="width: 100%;">
    <div class="row mt-4">
      <div class="col-4">
        <h2 class="h-font fw-bold fs-3 mb-2"><?php echo $settings_r['site_title'] ?></h2>
        <p style="font-style:italic ;">
          <!-- <br> Located in the prestigious downtown business district,
         Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
         boasted with Millennium modern outlook with a touch of local culture. Featuring 226 luxury
         rooms and suites, and restaurants offering exquisite cuisines. -->
         <br>
         <?php echo $settings_r['site_about'] ?>
        </p>

      </div>

      <div class="col-4">
        <h2 class="mb-3 px-5">LINKS</h2>
        <a href="index.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Home</a> <br>
        <a href="room.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Rooms Book</a> <br>
        <a href="facilities.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Facilities</a> <br>
        <a href="contact.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Contact Us</a> <br>
        <a href="about.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">About</a> <br>
        

      </div>

      <div class="col-4">
        <h2 class="mb-3">Follow Us</h2>
        <a href="<?php echo $contact_res['fb']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
          <i class="bi bi-facebook me-2"></i> FaceBook    
        </a>
        <br>
        <a href="<?php echo $contact_res['insta']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
          <i class="bi bi-instagram me-2"></i> Instagram    
        </a>
        <br>
        <a href="<?php echo $contact_res['tw']?>" target="_blank" class="d-inline-block  text-dark text-decoration-none"> 
          <i class="bi bi-twitter me-2"></i> Twitter    
        </a>
      </div>
    </div>
</div>

<h3 class="text-center bg-dark text-white p-1 m-0 fs-6">© 2022 HOTEL PARADISE. All rights reserved.</h3>

  <script>

    // SIGN-UP FORM
    
    let signup_form = document.getElementById('signup-form');

    signup_form.addEventListener('submit',(e)=>{
      e.preventDefault();

      let data = new FormData();

      data.append('name',signup_form.elements['name'].value);
      data.append('email',signup_form.elements['email'].value);
      data.append('phonenum',signup_form.elements['phonenum'].value);
      data.append('dob',signup_form.elements['dob'].value);
      data.append('address',signup_form.elements['address'].value);
      data.append('pass',signup_form.elements['pass'].value);
      data.append('cpass',signup_form.elements['cpass'].value);
      data.append('signup','');

      var myModal = document.getElementById('signupmodal');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      let xhr = new XMLHttpRequest();
      xhr.open("POST","login_signup.php",true);

      xhr.onload = function(){
        if(this.responseText == 'password_mismatch'){
          console.log("pass_mismatch");
        }
        else if(this.responseText == 'email_registered_already'){
          console.log("email_registered_already");
        }
        else if(this.responseText == 'phone_registered_already'){
          console.log("phone_registered_already");
        }
        // else if(this.responseText == 'mail_failed'){
        //   console.log("mail_failed");
        // }
        else if(this.responseText == 'ins_failed'){
          console.log("ins_failed");
        }
        else{
          console.log("success reg email sent");
          signup_form.reset();
        }
        
        
      }

      xhr.send(data);

      


   });

    // LOGIN FORM

    let login_form = document.getElementById('login-form');

    login_form.addEventListener('submit',(e)=>{
      e.preventDefault();

      let data = new FormData();

      data.append('email_phone',login_form.elements['email_phone'].value);
      data.append('pass',login_form.elements['pass'].value);
      data.append('login','');

      var myModal = document.getElementById('loginmodal');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      let xhr = new XMLHttpRequest();
      xhr.open("POST","login_signup.php",true);

      xhr.onload = function(){
        if(this.responseText == 'inv_email_phone'){
          console.log("inv_email_phone");
        }
        else if(this.responseText == 'user_inactive'){
          console.log("user_inactive");
        }
        else if(this.responseText == 'invalid_password'){
          console.log("invalid_password");
        }
        else{
          window.location = window.location.pathname;
          
        }
        
        
      }

      xhr.send(data);
   });

   //booking login confirmation

   function checkLoginToBook(status,room_id){
    if(status){
      window.location.href='confirm_booking.php?id='+room_id;
    }
    else{
      console.log('Please login to book room!');
    }
   }
    



  </script>