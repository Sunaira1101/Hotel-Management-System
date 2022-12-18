<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - HOME</title>
   

    <?php require 'links.php'; ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

   <!-- First Slide -->
   
  <div class="container-fluid px-4 ">
  <div class="swiper mainswiper">
      <div class="swiper-wrapper">

      <?php

        $res = selectAll('slider');
        while($row = mysqli_fetch_assoc($res)){
          $path = SLIDER_IMG_PATH;
          echo <<<data
           
            <div class="swiper-slide">
              <img src="$path$row[image]" class="w-100 d-block">
            </div>
          data;
        }
      ?>
      </div>
    </div>
  </div>

  <!-- Introduction -->
  <div class="text fs-3 me-2 ">
    <h2 class="text-center "><br><br><br> DHAKA'S MOST PRESTIGIOUS LUXURY BUSINESS <br> 
      AND CONVENTION HOTEL <br> 
    </h2>
    <h3 class="text-center text-secondary font-three fs-4">
      <p style="color: brown;" > HOTEL PARADISE <br> <br> </p>
    </h3>
    <h4 class="fs-2">
      <p style="color:darkblue; font-size: small; font-style: italic; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 48%;" > 
        Located in the prestigious downtown business district,
         Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
         boasted with Millennium modern outlook with a touch of local culture. Featuring 226 luxury
          rooms and suites, a selection of restaurants offering exquisite cuisines. Host your events 
          at the meeting spaces equipped with modern facilities. Our outdoor temperature-controlled
           swimming pool and Health Club is a perfect destination for business or leisure. <br> <br> 
          </p>
    </h4>
    
      
    </div>
    <div class="d-flex justify-content-center mb-6">
      <h2 class="text-warning fs-6 mx-4"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>4.6/5 (552 Reviews)</h2>
    </div>

    

  <!-- BOOKING AVAILABILITY -->

  <div class="container books">
    <div class="row">
        <div class="col-12 bg-white shadow p-4 rounded">
            <h2 class="mb-4">BOOKING OPTIONS</h2>
            <form>
                <div class="row">
                    <div class="col-3">
                        <label class="form-label" style="font-weight: 500;">CHECK-IN</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="form-label" style="font-weight: 500;">CHECK-OUT </label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-2">
                        <label class="form-label" style="font-weight: 500;"> ADULT </label>
                        <select class="form-select">
                            <option selected>---</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label" style="font-weight: 500;"> CHILDREN </label>
                        <select class="form-select">
                            <option selected>---</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label" style="font-weight: 500;">NO. OF ROOMS</label>
                        <select class="form-select">
                            <option selected>---</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-1 my-3">
                        <button type="submit" class="btn btn-dark">SEARCH</button>
                    </div>
                </div>
            </form>






        </div>



    </div>




  </div>

  <hr style="height:5px;border-width:10px; margin-top: 80px; color:black; background-color:black">

  <!-- OUR ROOMS -->

  <h2 class="mt-5 pt-4 mb-4 fw-bolder text-center font-two "><br> <u>OUR ROOMS</u> </h2>
  <h3 class="text-center mt-2 mb-4 fw-italic ">
    <p style="color: brown;"><i class="bi bi-star-fill"></i><b>MOST POPULAR</b> <i class="bi bi-star-fill"></i></p>
  </h3>
 
 

   <div class="container">
    <div class="row justify-content-center">

      <?php
          $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ORDER BY `R_ID` ASC LIMIT 3 ",[1,0],'ii');

          while($room_data = mysqli_fetch_assoc($room_res)){

            //get features
            
            $fea_q = mysqli_query($db,"SELECT f.name FROM `features` f 
              INNER JOIN `room_features` rfea ON f.feature_ID = rfea.features_ID
              WHERE rfea.room_ID = '$room_data[R_ID]'");

            $features_data = "";
            while($fea_row = mysqli_fetch_assoc($fea_q)){
              $features_data .="<span class='text-dark badge rounded-pill bg-light'>
                <li> <i>$fea_row[name]</i></li> 
              </span>";
            }

            //get facilities

            $fac_q = mysqli_query($db,"SELECT f.name FROM `facilities` f 
                INNER JOIN `room_facilities` rfac ON f.facilities_ID = rfac.fac_ID
                WHERE rfac.room_ID = '$room_data[R_ID]'");

            $facilities_data = "";
            while($fac_row = mysqli_fetch_assoc($fac_q)){
              $facilities_data .="<span class='text-dark badge rounded-pill bg-light'>
                <li> <i>$fac_row[name]</i></li> 
              </span>";
            }

            //get thumbnail

            $room_thumb = ROOMS_IMG_PATH."r1.jpg";
            $thumb_q = mysqli_query($db, "SELECT * FROM `room_images` 
              WHERE `room_id`='$room_data[R_ID]' AND `thumb`='1'");

            if(mysqli_num_rows($thumb_q)>0){
              $thumb_res = mysqli_fetch_assoc($thumb_q);
              $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
            }

            echo <<<data

                <div class="col-3 my-3 mx-2">
                <div class="card shadow" style="max-width: 350px; margin: auto;">
                    <img src="$room_thumb" class="card-img-top">
                    <div class="card-body">
                      <h5 class="fw-bolder mt-2">$room_data[name]</h5>
                      <h6 style="font-size: 16px; font-style: italic;">Tk. $room_data[price] per night</h6>
                    
                    <div class="features mb-4">
                      <h6 class="mb-1 mt-4 fw-bold">Features</h6>                    
                        $features_data
                    </div>

                    <div class="facilities mb-4">
                        <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>                       
                          $facilities_data
                      </div>

                      <div class="guests mb-4">
                        <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>$room_data[adult] adults</i></li> 
                        </span>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>$room_data[children] adults</i></li> 
                        </span>
                      </div>

                      <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="btn btn-dark text-white  ">BOOK NOW</a>
                        <a href="room_details.php?id=$room_data[R_ID]" class="btn btn-outline-success text-black shadow ">More Details...</a>

                      </div>
                    </div>
                    </div>
              </div>
            data;
          }
        ?>
                  
        <div class="col-12 text-center mt-5">
            <a href="room.php" class="btn btn-outline-success fw-bolder shadow fs-4">MORE ROOMS <i class="bi bi-arrow-right-circle"></i></a>
        </div>
     </div>
    </div>

    <hr style="height:5px;border-width:10px; margin-top: 80px; color:black; background-color:black">

    <!-- OUR FACILITIES -->

    <h2 class="mt-5 pt-4 mb-4 fw-bolder text-center font-two "><br> <u>OUR FACILITIES</u>  <br> <br></h2>

    <div class="container">
      <div class="row justify-content-evenly px-5">
      <?php

        $res = mysqli_query($db,"SELECT * FROM `facilities` ORDER BY `facilities_ID` ASC LIMIT 4");      
        $path = FACILITIES_IMG_PATH; 

        while($row = mysqli_fetch_assoc($res)){
          echo<<<data
          
            <div class="col-2 text-center bg-white shadow rounded py-4 my-3">
              <img src="$path$row[icon]" width="80px">
              <h2 class="mt-3 text-secondary fs-3">$row[name]</h2>
            </div>

          data;
        }
      ?>

      <div class="col-12 text-center mt-5">
        <a href="facilities.php" class="btn btn-outline-success fw-bolder shadow fs-4">MORE FACILITIES <i class="bi bi-arrow-right-circle"></i></a>
      </div>
    </div>

    <hr style="height:5px;border-width:10px; margin-top: 80px; color:black; background-color:black">

    <!-- REVIEWS-->

    <h2 class="mt-5 pt-3 mb-4 fw-bolder text-center font-two "><br> <u>REVIEWS</u>  <br> <br></h2>

    <div class="container mt-5">
      <div class="swiper swiper-reviews">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-light rounded shadow p-4 mt-2 my-3 w-100 my-2">
            <div class="profile d-flex align-items-center mb-3">
            <img src="images/reviews/r1.png" width="30px">
            <h2 class=" mb-1 ms-2">Fahrin Sunaira</h2>
          </div>
          <p  style="color:rgb(11, 1, 21) ;">
            <br><br><br> A great vacation indeed! 
            <br> Everything was perfect, very good
            facilities, and staffs were very well-mannered.
            <br> Overall a very good stay. <br><br><br>
          </p>

          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i> <br><br>
          </div>


           </div> 


           <div class="swiper-slide bg-light rounded shadow p-4 mt-2 my-3 w-100 my-2 ">
            <div class="profile d-flex align-items-center mb-3">
            <img src="images/reviews/r1.png" width="30px">
            <h2 class="mb-1 ms-2">Farasha Shamma</h2>
          </div>
          <p  style="color:rgb(11, 1, 21)  ;">
            <br><br><br> A great vacation indeed! 
            <br> Everything was perfect, very good
            facilities, and staffs were very well-mannered.
            <br> Overall a very good stay. <br><br><br>
          </p>

          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i> <br><br>
          </div>


           </div> 

           
           <div class="swiper-slide bg-light rounded shadow p-4 mt-2 my-3 w-100 my-2 ">
            <div class="profile d-flex align-items-center mb-3">
            <img src="images/reviews/r1.png" width="30px">
            <h2 class="mb-1 ms-2">Tahiatun Taha</h2>
          </div>
          <p  style="color:rgb(11, 1, 21)  ;">
            <br><br><br> A great vacation indeed! 
            <br> Everything was perfect, very good
            facilities, and staffs were very well-mannered.
            <br> Overall a very good stay. <br><br><br>
          </p>

          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i> <br><br>
          </div>
           </div>

           <!-- WILL ADD MORE!!!!!!!!!! -->
          
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <hr style="height:5px;border-width:10px; margin-top: 100px; color:black; background-color:black">

     <!-- CONTACT US-->

     <?php 
       $contact_q = "SELECT * FROM `contact_info` WHERE `C_ID`=?";
       $values = [1];
       $contact_res = mysqli_fetch_assoc(select($contact_q,$values,'i'));
       
     ?>

     <h2 class="mt-5 pt-3 mb-4 fw-bolder text-center font-two "><br> <u>CONTACT US</u>  <br> <br></h2>
  
     
     <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-8 p-4 mb-3 px-4 bg-white rounded">
          <iframe class="w-100 rounded" height="600px" src="<?php echo $contact_res['iframe']?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="col-4">
        <div class="bg-white p-4 rounded mb-4 shadow">
          <h3 style="color:brown; margin-bottom: 15px;"> <u>Call Us</u>  </h3>
          <a href="tel: +<?php echo $contact_res['phone1'] ?>" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone1'] ?>   
          </a>
          <br>
          <a href="tel: +<?php echo $contact_res['phone2'] ?> " class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone2'] ?>    
          </a>
          <br>
          <a href="tel: +<?php echo $contact_res['phone3'] ?> " class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_res['phone3'] ?>    
          </a>
        </div>

        <div class="bg-white p-4 rounded mb-4 shadow">
          <h3 style="color:brown; margin-top: 4px; margin-bottom: 15px;"> <u>Social Media</u>  </h3>
          
          <a href="<?php echo $contact_res['fb'] ?> " target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-facebook me-2"></i> FaceBook    
          </a>
          <br>
          <a href="<?php echo $contact_res['insta'] ?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-instagram me-2"></i> Instagram    
          </a>
          <br>
          <a href="<?php echo $contact_res['tw'] ?>" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-twitter me-2"></i> Twitter    
          </a>
          <br>
          
        </div>
      </div>
      </div>
     </div>

     <hr style="height:5px;border-width:10px; margin-top: 80px; color:black; background-color:black">

     <!-- FAQ-->

     <h2 class="mt-5 pt-3 mb-4 fw-bolder text-center font-two shadow-none"><br> <u>FAQs FOR HOTEL PARADISE</u>  <br> <br></h2>

     <div class="container"> 

      <div class="accordion" id="accordionExample">

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What are the check-in and check-out times for Hotel Paradise?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Check-in at Hotel Paradise is from 3PM, and check-out time is 12PM. Contact the hotel directly for options available for early check-in or late check-out.</strong> 
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How much does it cost to stay at Hotel Paradise?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Rates for accommodations at Hotel Paradise vary by season. For your rate options, please input your dates.</strong> 
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How do I book rooms online at Hotel Paradise?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>If you are a new guest, please sign-up and choose your desired room. You can also check for room availability.</strong>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Does Hotel Paradise offer free parking?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Yes, Hotel Paradise offers complimentary parking for hotel guests.</strong>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Is there free breakfast available at Hotel Paradise?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Yes, Hotel Paradise offers complimentary breakfast.</strong>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Does Hotel Paradise offer free Wi-Fi?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Yes, the Hotel Paradise offers free WiFi!</strong>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Does Hotel Paradise have a restaurant on site?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Hotel Paradise has 5 restaurants.</strong>
            </div>
          </div>
        </div>

      </div>
  
  


  </div>
  <br><br><br>

  <!-- Footer-->

  

<!-- </div> -->   

  
<?php require('footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- can keep top one in footer -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mainswiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: "true",
        autoplay: {
            delay: 2500,
            desableOnInteraction: "false",
        },
      });

      var swiper = new Swiper(".swiper-reviews", {
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        loop: "true",
        autoplay: {
            delay: 2500,
            desableOnInteraction: "false",
        },
        pagination: {
          el: ".swiper-pagination",
        },
      }) 
      
      
      ;
    </script>

</body>
</html>