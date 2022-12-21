<?php

    require('admin/extra/func.php');
    require('admin/extra/connect.php');

    session_start();

    if(isset($_GET['fetch_rooms'])){

        $chk_avail = json_decode($_GET['chk_avail'],true);

        if($chk_avail['checkin']!='' && $chk_avail['checkout']!=''){
            
            $today_date = new DateTime(date("Y-m-d"));
            $checkin_date = new DateTime($chk_avail['checkin']);
            $checkout_date = new DateTime($chk_avail['checkout']);

            if($checkin_date == $checkout_date){
                echo"<h3 class='text-center text-danger'>Invalid Dates, No Rooms to show!</h3>";
                exit;
            }
            else if($checkout_date < $checkin_date){
                echo"<h3 class='text-center text-danger'>Invalid Dates, No Rooms to show!</h3>";
                exit;
            }
            else if($checkin_date < $today_date){
                echo"<h3 class='text-center text-danger'>Invalid Dates, No Rooms to show!</h3>";
                exit;
            }
        }

        $count_rooms = 0;
        $output = "";
        
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

          $login=0;
          if(isset($_SESSION['login']) && $_SESSION['login']==true){
            $login=1;
          }  
          
          $book_btn = "<button onclick='checkLoginToBook($login,$room_data[R_ID])' class='btn btn-dark w-100 text-white mb-2'>BOOK NOW</button>";

          
          $output.="
            <div class='card mb-3'>
              <div class='row g-0 p-4 align-items-center'>
                <div class='col-md-5'>
                  <img src='$room_thumb' class='img-fluid rounded-start' >
                </div>
                <div class='col-md-5 px-4'>
                  <h2 class='mb-2' style='font-size: 28px;'>$room_data[name]</h2>
                  <h3 style='font-size: 16px; font-style: italic;'>Tk. $room_data[price] per night</h3>

                  <div class='features mb-3'>
                    <h6 class='mb-1 mt-4 fw-bold'>Features</h6>
                    $features_data
                  </div>

                  <div class='facilities mb-3'>
                    <h6 class='mb-1 mt-3 fw-bold'>Facilities</h6>
                    $facilities_data
                  </div>

                  <div class='guests mb-4'>
                    <h6 class='mb-1 mt-3 fw-bold'>Guests</h6>
                    <span class='text-dark badge rounded-pill bg-light'>
                      <li> <i>$room_data[adult] adults</i></li> 
                    </span>
                    <span class='text-dark badge rounded-pill bg-light'>
                      <li> <i>$room_data[children] children</i></li> 
                    </span>
                  </div>
                </div>

                <div class='col-md-2'>
                    $book_btn
                    <a href='room_details.php?id=$room_data[R_ID]' class='btn btn-outline-success w-100 text-black shadow '>More Details</a>
                </div>

              </div>
            </div>
          ";

          $count_rooms++;
         }

         if($count_rooms>0){
            echo $output;
         }
         else{
            echo"<h3 class='text-center text-danger'>No Rooms to show!</h3>";
         }

    }












?>