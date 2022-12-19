<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - CONFIRM BOOKING</title>
    <?php require('links.php'); ?>



</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

<?php
  if(!isset($_GET['id'])){
    redirect('room.php');
  }
  else if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
    redirect('room.php');
  }

  //filter to get room + user data

  $data = filteration($_GET);
  $room_res = select("SELECT * FROM `rooms` WHERE `R_ID`=? AND `status`=? AND `removed`=?",[$data['id'],1,0],'iii');

  if(mysqli_num_rows($room_res)==0){
    redirect('room.php');
  }

  $room_data = mysqli_fetch_assoc($room_res);

  $_SESSION['room'] = [
    "id" => $room_data['R_ID'],
    "name" => $room_data['name'],
    "price" => $room_data['price'],
    "payment" => null,
    "available" => false
  ];

  // print_r($_SESSION['room']);
  // exit;

  $user_res = select("SELECT * FROM `user_info` WHERE `id`=? LIMIT 1", [$_SESSION['uId']],"i");
  $user_data = mysqli_fetch_assoc($user_res);

?>






  

  <div class="container">
    <div class="row">

      <div class="col-12 my-5 px-4">
        <h2 class="fw-bolder font-two"> <u>CONFIRM BOOKING</u><br></h2>
        <div style="font-size: 16px;">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span> | </span>
          <a href="room.php" class=" text-secondary text-decoration-none">ROOMS</a>
          <span> | </span>
          <a href="#" class=" text-secondary text-decoration-none">CONFIRM</a>
        </div>
      </div>

      <div class="col-7 px-4">
       <?php
         
          $room_thumb = ROOMS_IMG_PATH."r1.jpg";
          $thumb_q = mysqli_query($db, "SELECT * FROM `room_images` 
            WHERE `room_id`='$room_data[R_ID]' AND `thumb`='1'");

          if(mysqli_num_rows($thumb_q)>0){
            $thumb_res = mysqli_fetch_assoc($thumb_q);
            $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
          }

          echo<<<data
            <div class="card p-3 shadow-sm rounded">
              <img src="$room_thumb" class="img-fluid rounded mb-4">
              <h2 class="fs-4">$room_data[name]</h2>
              <h3 class="fs-5">Tk. $room_data[price] per night</h3> 
            </div>
          data;









       ?>
      </div>

      <div class="col-5 px-4">
        <div class="card mb-4 shadow rounded-3">
          <div class="card-body">

            <form action="#" id="booking_form">
              <h2 class="mb-3 fs-4">BOOKING DETAILS</h2>
              <div class="row">
                <div class="col-6 mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" type="text" value="<?php echo $user_data['name'] ?>" class="form-control shadow-none" required>
                </div>
                <div class="col-6 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input name="phonenum" type="number" value="<?php echo $user_data['phonenum'] ?>" class="form-control shadow-none" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label">Address</label>
                  <textarea name="address" class="form-control shadow-none" rows="2" required><?php echo $user_data['address'] ?></textarea>
                </div>
                <div class="col-6 mb-3">
                  <label class="form-label">Check-In</label>
                  <input name="checkin" type="date" class="form-control shadow-none" required>
                </div>
                <div class="col-6 mb-3">
                  <label class="form-label">Check-Out</label>
                  <input name="checkout" type="date" class="form-control shadow-none" required>
                </div>
                <div class="col-12">
                  <h2 class="mb-3 text-danger fs-6 mt-4" id="pay_info">Please provide check-in check-out date!</h2>
                  <button name="pay_now" class="btn btn-secondary w-100 text-white shadow-none mb-1" disabled>Proceed To Payment</button>
                </div>
              </div>
            </form>
          </div>
        </div>  
      </div>

    

    </div>
  </div>
  <br><br><br>
  <br><br><br>
  <br><br><br>


  




 
  
<?php require('footer.php'); ?>

<script>

  let booking_form = document.getElementById('booking_form');







</script>



</body>
</html>