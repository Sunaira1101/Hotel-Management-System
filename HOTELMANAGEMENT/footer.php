<?php 
       $contact_q = "SELECT * FROM `contact_info` WHERE `C_ID`=?";
       $values = [1];
       $contact_res = mysqli_fetch_assoc(select($contact_q,$values,'i'));
      
  ?>


<div class="container-fluid bg-light mt-5 border-top border-2 border-dark">
    <div class="row mt-4">
      <div class="col-4">
        <h2 class="h-font fw-bold fs-3 mb-2">HOTEL PARADISE</h2>
        <p style="font-style:italic ;">
          <br> Located in the prestigious downtown business district,
         Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
         boasted with Millennium modern outlook with a touch of local culture. Featuring 226 luxury
         rooms and suites, and restaurants offering exquisite cuisines.
        </p>

      </div>

      <div class="col-4">
        <h2 class="mb-3 px-5">LINKS</h2>
        <a href="index.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Home</a> <br>
        <a href="room.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Rooms Book</a> <br>
        <a href="facilities.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Facilities</a> <br>
        <a href="contact.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Contact Us</a> <br>
        <a href="about.php" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">About</a> <br>
        <a href="#" class="d-inline-block mb-2 px-5 text-dark text-decoration-none">Help</a> 

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