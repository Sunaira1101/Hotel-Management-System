<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - FACILITIES</title>
    <?php require('links.php'); ?>

<style>
    .pop:hover{
      border-color: aquamarine !important ;
      transform: scale(1.05);
      transition: all 0.3s;
    }
</style>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>OUR FACILITIES</u>  <br></h2>
    <p style="color:rgb(45, 40, 16); font-size: small; font-style: italic; margin-top: 20px; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 60%;">
      Located in the prestigious downtown business district,
      Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
      boasted with Millennium modern outlook with a touch of local culture. Get the world-class
      amazing facilities and services from our hotel. Check out more here about our facilities, which
      got us a 5/5 review from The New York Times. See more facilites below. <br><br> <br><br><br>
    </p>
  </div>

  <div class="container">
    <div class="row">

    <?php

      $res = selectAll('facilities');      
      $path = FACILITIES_IMG_PATH; 
      
      while($row = mysqli_fetch_assoc($res)){
        echo<<<data
          <div class="col-4 mb-5 px-4 py-2" >
          <div class="bg-white rounded shadow p-4 border border-2 border-dark pop" style="height: 300px;">
            <div class="d-flex align-items-center mb-2">
              <img src="$path$row[icon]" width="40px">
              <h2 class="mt-3 text-dark fs-2">$row[name]</h2>
            </div>
            <p class="mb-2 py-2">$row[description]</p>
          </div>
        </div>
        
        data;
      }
    ?>

    </div>
  </div>

  <br><br><br>
  <br><br><br>





 
  
<?php require('footer.php'); ?>



</body>
</html>