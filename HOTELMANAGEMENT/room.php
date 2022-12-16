<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - ROOM</title>
    <?php require('links.php'); ?>



</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>BOOK OUR ROOMS</u>  <br></h2>
    <p style="color:rgb(45, 40, 16); font-size: small; font-style: italic; margin-top: 20px; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 60%;">
      Located in the prestigious downtown business district,
      Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
      boasted with Millennium modern outlook with a touch of local culture. Get to know more about our
      rooms here, and choose the desired room you want to spend your day in! <br><br> <br><br><br>
    </p>
  </div>

  <div class="container-fluid">
    <div class="row">

    <div class="col-3 mb-4 ps-4">    
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
        <div class="container-fluid flex-column align-items-stretch">   <!--to make one after another not sideways-->
          <h2 class="mt-2 text-center">Options</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#optionsDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse flex-column mt-3 align-items-stretch" id="optionsDropdown">
                <div class="border bg-light p-4 mb-3 rounded">
                  <h3 class="mb-3" style="font-size:16px;">CHECK AVAILABILITY</h3>
                  <label class="form-label">CHECK-IN</label>
                      <input type="date" class="form-control">
                  <label class="form-label">CHECK-OUT</label>
                      <input type="date" class="form-control">
                
                 </div>

                    <div class="border bg-light p-4 mb-3 rounded">
                      <h3 class="mb-3" style="font-size:16px;">GUESTS</h3>
                      <label class="form-label">Adults</label>
                          <input type="number" class="form-control shadow-none">
                      <label class="form-label">Children</label>
                          <input type="number" class="form-control shadow-none">
                      
                    </div>
               </div>
         </div>
      </nav>
    </div>

      <div class="col-9 px-4">

       <?php
         $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=?",[1,0],'ii');

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
            <div class="card mb-3">
              <div class="row g-0 p-4 align-items-center">
                <div class="col-md-5">
                  <img src="$room_thumb" class="img-fluid rounded-start" >
                </div>
                <div class="col-md-5 px-4">
                  <h2 class="mb-2" style="font-size: 28px;">$room_data[name]</h2>
                  <h3 style="font-size: 16px; font-style: italic;">Tk. $room_data[price] per night</h3>

                  <div class="features mb-3">
                    <h6 class="mb-1 mt-4 fw-bold">Features</h6>
                    $features_data
                  </div>

                  <div class="facilities mb-3">
                    <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>
                    $facilities_data
                  </div>

                  <div class="guests mb-4">
                    <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>$room_data[adult] adults</i></li> 
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>$room_data[children] children</i></li> 
                    </span>
                  </div>
                </div>

                <div class="col-md-2">
                    <a href="#" class="btn btn-dark w-100 text-white mb-2  ">BOOK NOW</a>
                    <a href="room_details.php?id=$room_data[R_ID]" class="btn btn-outline-success w-100 text-black shadow ">More Details</a>
                </div>

              </div>
          </div>


          data;





         }


       ?>






      </div>

    </div>
  </div>
  <br><br><br>

  




 
  
<?php require('footer.php'); ?>



</body>
</html>