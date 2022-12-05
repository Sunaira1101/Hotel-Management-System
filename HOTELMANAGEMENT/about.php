<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL PARADISE - ABOUT</title>
    <?php require('links.php'); ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

<?php require('header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>ABOUT US</u>  <br></h2>
    <p style="color:rgb(45, 40, 16); font-size: small; font-style: italic; margin-top: 20px; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 60%;">
      Located in the prestigious downtown business district,
      Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
      boasted with Millennium modern outlook with a touch of local culture. Get the world-class
      amazing facilities and services from our hotel. Learn more about out hotel, our management
      staffs and more. <br><br> <br><br><br>
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-6 mb-4">
        <h2 class="mb-3 fw-bolder fs-3">Fahrin Hossain Sunaira</h2>
        <p>
          In the early 2010s, Fahrin Hossain Sunaira founded the Hampton Inn hotels, which was a 
          company in the Holiday Inn Corporation. This type of hotel was tagged as limited - service, 
          meeting the needs of cost - conscious business travelers and pleasure travelers 
          alike. Her pioneering efforts in developing a product and service for these market
          segments have proved to be a remarkable contribution to the history of the hotel 
          industry.
        </p>
      </div>
      <div class="col-5 mb-4">
        <img src="images/about/a1.jpg" width="100%">
      </div>
    </div>
  </div>

  <h3 class="text-center mt-5 mb-4 fw-italic">
    <p style="color: rgb(107, 54, 54);"><b> <br><br><br> <u>OUR MILESTONES<br><br></u> </b></p>
  </h3>
  

  <div class="container">
    <div class="row">
      <div class="col-3 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-3 border-dark text-center">
          <img src="images/about/a2.svg" width="70px">
          <h2 class="mt-4 fs-4"> 220+ Rooms</h2>
        </div>
        
      </div>
      <div class="col-3 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-3 border-dark text-center">
          <img src="images/about/a2.svg" width="70px">
          <h2 class="mt-4 fs-4"> 220+ Rooms</h2>
        </div>
        
      </div>
      <div class="col-3 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-3 border-dark text-center">
          <img src="images/about/a2.svg" width="70px">
          <h2 class="mt-4 fs-4"> 220+ Rooms</h2>
        </div>
        
      </div>
      <div class="col-3 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-3 border-dark text-center">
          <img src="images/about/a2.svg" width="70px">
          <h2 class="mt-4 fs-4"> 220+ Rooms</h2>
        </div>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>MANAGEMENT TEAM </u>  <br><br></h2>

  <div class="container px-4 mt-4">
    <div class="swiper swiper-about">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide  text-center overflow-hidden rounded">
          <img src="images/about/a3.jpeg" width="100%">
          <h2 class="mt-2 fw-bold fs-4">Fahrin Hossain Sunaira</h2>
        </div>
        <div class="swiper-slide  text-center overflow-hidden rounded">
          <img src="images/about/a3.jpeg" width="100%">
          <h2 class="mt-2 fw-bold fs-4">Farasha Shamma Youssouf</h2>
        </div>
        <div class="swiper-slide  text-center overflow-hidden rounded">
          <img src="images/about/a3.jpeg" width="100%">
          <h2 class="mt-2 fw-bold fs-4">Tahiatun Nasa Taha</h2>
        </div>    
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
  <br><br><br>
  <br><br><br>
  
<?php require('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".swiper-about", {
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>