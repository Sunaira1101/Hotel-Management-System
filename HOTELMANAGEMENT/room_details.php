<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - ROOM DETAILS</title>
    <?php require('links.php'); ?>



</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

<?php
  if(!isset($_GET['id'])){
    redirect('room.php');
  }

  $data = filteration($_GET);
  $room_res = select("SELECT * FROM `rooms` WHERE `R_ID`=? AND `status`=? AND `removed`=?",[$data['id'],1,0],'iii');

  if(mysqli_num_rows($room_res)==0){
    redirect('room.php');
  }

  $room_data = mysqli_fetch_assoc($room_res);







?>






  

  <div class="container">
    <div class="row">

      <div class="col-12 my-5 px-4">
        <h2 class="fw-bolder font-two"> <u><?php echo $room_data['name'] ?></u><br></h2>
        <div style="font-size: 16px;">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span> | </span>
          <a href="room.php" class=" text-secondary text-decoration-none">ROOMS</a>
        </div>
      </div>

      <div class="col-7 px-4">
        <div id="roomImage" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
               
               $room_img = ROOMS_IMG_PATH."thumbnail.jpg";
                $img_q = mysqli_query($db, "SELECT * FROM `room_images` 
                  WHERE `room_id`='$room_data[R_ID]'");
      
                if(mysqli_num_rows($img_q)>0){
                  $active_class = 'active';
                  
                 while($img_res = mysqli_fetch_assoc($img_q)){
                    echo"
                    <div class='carousel-item $active_class'>
                      <img src='".ROOMS_IMG_PATH.$img_res['image']."' class='d-block w-100'>
                    </div>
                    ";
                    $active_class='';
                 }  
                }
                else{
                  echo"
                  <div class='carousel-item active'>
                    <img src='$room_img' class='d-block w-100'>
                  </div>
                  ";
                }
            ?>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#roomImage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#roomImage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-5 px-4">
        <div class="card mb-4 shadow rounded-3">
          <div class="card-body">
            <?php

               echo<<<price
                <h3 style="font-size: 16px; font-style: italic;">Tk. $room_data[price] per night</h3>
               price;

               echo<<<rating
                <div class="ratings">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i> <br>
                </div>
              rating;

              $fea_q = mysqli_query($db,"SELECT f.name FROM `features` f 
                INNER JOIN `room_features` rfea ON f.feature_ID = rfea.features_ID
                WHERE rfea.room_ID = '$room_data[R_ID]'");

              $features_data = "";
                while($fea_row = mysqli_fetch_assoc($fea_q)){
                  $features_data .="<span class='text-dark badge rounded-pill bg-light'>
                   <li> <i>$fea_row[name]</i></li> 
                  </span>";
              } 
              
              echo<<<features
                <div class="features mb-3">
                  <h6 class="mb-1 mt-4 fw-bold">Features</h6>
                  $features_data
                </div>
              features;

              $fac_q = mysqli_query($db,"SELECT f.name FROM `facilities` f 
                INNER JOIN `room_facilities` rfac ON f.facilities_ID = rfac.fac_ID
                WHERE rfac.room_ID = '$room_data[R_ID]'");

               $facilities_data = "";
                 while($fac_row = mysqli_fetch_assoc($fac_q)){
                   $facilities_data .="<span class='text-dark badge rounded-pill bg-light'>
                     <li> <i>$fac_row[name]</i></li> 
                    </span>";
                 }

                 echo<<<facilities
                  <div class="facilities mb-3">
                    <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>
                    $facilities_data
                  </div>
                 facilities;

                 echo<<<guests
                  <div class="guests mb-4">
                    <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>$room_data[adult] adults</i></li> 
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>$room_data[children] children</i></li> 
                    </span>
                  </div>
                 guests;

                 echo<<<area
                  <div class="facilities mb-3">
                    <h6 class="mb-1 mt-3 fw-bold">Area</h6>
                    <span class='text-dark badge rounded-pill bg-light'>
                     <li> <i>$room_data[area] sq.ft.</i></li> 
                    </span>
                  </div>
                 area;

                 $login=0;
                 if(isset($_SESSION['login']) && $_SESSION['login']==true){
                  $login=1;
                 } 

                 echo<<<book
                  <button onclick='checkLoginToBook($login,$room_data[R_ID])' class='btn btn-dark w-100 text-white mb-2'>BOOK NOW</button>
                 book;
            ?>
          </div>
        </div>  
      </div>

    

      <div class="col-12 mt-4 px-4">
        <div class="card mb-4 shadow rounded-3">
            <div class="card-body">
              <h2 class="mb-4 fs-4">Description</h2>
              <p>
                <?php echo $room_data['description'] ?>
              </p>
            </div>


            <div class="card-body">
              <h2 class="mb-4 fs-4">Reviews & Ratings</h2>
              <h3 class="underline2"></h3>
                <div class="d-flex align-items-center mb-3">
                  <img src="images/reviews/r1.png" width="22px">
                  <h2 class=" mb-1 ms-2 fs-5">Fahrin Sunaira</h2>
                </div>
              <p  style="color:rgb(11, 1, 21) ;">
                 A great vacation indeed! 
                <br> Everything was perfect, very good
                facilities, and staffs were very well-mannered.
                <br> Overall a very good stay. 
              </p>

              <div class="ratings">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i> <br><br>
              </div>
            </div>
        </div>
      </div>

    </div>
  </div>
  <br><br><br>

  




 
  
<?php require('footer.php'); ?>



</body>
</html>