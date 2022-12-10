<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - CONTACT</title>
    <?php require('links.php'); ?>



</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>CONTACT US</u>  <br></h2>
    <p style="color:rgb(45, 40, 16); font-size: small; font-style: italic; margin-top: 20px; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 60%;">
      Located in the prestigious downtown business district,
      Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
      boasted with Millennium modern outlook with a touch of local culture. Get the world-class
      amazing facilities and services from our hotel. Contact us following the following
      instructions to get more information. <br><br> <br><br><br>
    </p>
  </div>

  <?php 
       $contact_q = "SELECT * FROM `contact_info` WHERE `C_ID`=?";
       $values = [1];
       $contact_res = mysqli_fetch_assoc(select($contact_q,$values,'i'));
      
  ?>

  <div class="container">
    <div class="row">
      <div class="col-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <div class="d-flex align-items-center mb-2">
          <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_res['iframe']?>" width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <h2 class="fs-5 mb-1">Location</h2>
          <a href="<?php echo $contact_res['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_res['address']?>
          </a>

          <h2 class="fs-5 mt-4">Call Us</h2>
          <a href="tel: +<?php echo $contact_res['phone1']?>" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone1']?>  
          </a>
          <br>
          <a href="tel: +<?php echo $contact_res['phone2']?>" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone2']?>    
          </a>
          <br>
          <a href="tel: +<?php echo $contact_res['phone3']?>" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone3']?>    
          </a>

          <h2 class="fs-5 mt-4">Email</h2>
          <a href="<?php echo $contact_res['email']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
          <i class="bi bi-envelope-fill"></i> <?php echo $contact_res['email']?>    
          </a>

          <h2 class="fs-5 mt-4">Follow Us</h2>
          <a href="<?php echo $contact_res['fb']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-facebook me-2"></i> FaceBook    
          </a>
          <br>
          <a href="<?php echo $contact_res['insta']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-instagram me-2"></i> Instagram    
          </a>
          <br>
          <a href="<?php echo $contact_res['tw']?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-twitter me-2"></i> Twitter    
          </a>
          <br>

          
          
        </div>
      </div>

      <div class="col-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h2>Reach Us</h2>
            <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Name<br></label>
                    <input name="name" required type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Email<br></label>
                    <input name="email" required type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Phone Number<br></label>
                    <input name="phone" required type="number" class="form-control shadow-none">
            </div>
            <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message<br></label>
                    <textarea name="message" required class="form-control" rows="6" style="resize: none;"></textarea>
            </div>
            <button type="submit" name="send" class="btn  bg-secondary text-white mt-4">Submit</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>




 
  
<?php require('footer.php'); ?>



</body>
</html>