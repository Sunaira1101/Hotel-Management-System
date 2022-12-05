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
        <div class="swiper-slide">
          <img src="images/firstslider/1.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/2.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/3.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/4.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/5.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/6.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/firstslider/7.jpg" class="w-100 d-block">
        </div>
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
 
  <!-- ROOM 1 -->

   <div class="container">
    <div class="row justify-content-center">
        <div class="col-3 my-3 mx-2">
            <div class="card shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/r1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="fw-bolder mt-2">Double Room</h5>
                  <h6> Tk. 16,000 per night</h6>
                <div class="features mb-4">
                  <h6 class="mb-1 mt-4 fw-bold">Features</h6>
                  <span class="text-dark badge rounded-pill bg-light">
                    <li> <i>18 m2 room</i></li> 
                  </span>
                  <span class="text-dark badge rounded-pill bg-light">
                    <li> <i>1 toilet</i></li> 
                  </span>
                  <span class="text-dark badge rounded-pill bg-light">
                    <li><i>Balcony</i></li>
                  </span>
                  <span class="text-dark badge rounded-pill bg-light">
                    <li> <i>2 sofa</i> </li>
                  </span>
                </div>

                <div class="facilities mb-4">
                    <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>Flat-Screened TV</i></li> 
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>WiFi</i></li> 
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li><i>Air-conditioner</i></li>
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>Room Heater</i> </li>
                    </span>
                  </div>

                  <div class="facilities mb-4">
                    <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>2 adults</i></li> 
                    </span>
                    <span class="text-dark badge rounded-pill bg-light">
                      <li> <i>2 children</i></li> 
                    </span>
                  </div>

                  <div class="d-flex justify-content-between mb-3">
                    <a href="#" class="btn btn-dark text-white  ">BOOK NOW</a>
                    <a href="#" class="btn btn-outline-success text-black shadow ">More Details...</a>

                  </div>
                </div>
                </div>
              </div>

  <!-- ROOM 2 -->

        <div class="col-3 my-3 mx-2">
                <div class="card shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="fw-bolder mt-2">Deluxe Room</h5>
                      <h6> Tk. 24,000 per night</h6>
                    <div class="features mb-4">
                      <h6 class="mb-1 mt-4 fw-bold">Features</h6>
                      <span class="text-dark badge rounded-pill bg-light">
                        <li> <i>26 m2 room</i></li> 
                      </span>
                      <span class="text-dark badge rounded-pill bg-light">
                        <li> <i>2 rooms</i></li> 
                      </span>
                      <span class="text-dark badge rounded-pill bg-light">
                        <li><i>Balcony</i></li>
                      </span>
                      <span class="text-dark badge rounded-pill bg-light">
                        <li> <i>1 table</i> </li>
                      </span>
                    </div>
    
                    <div class="facilities mb-4">
                        <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>Flat-Screened TV</i></li> 
                        </span>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>WiFi</i></li> 
                        </span>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li><i>Air-conditioner</i></li>
                        </span>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>Room Heater</i> </li>
                        </span>
                      </div>

                      <div class="facilities mb-4">
                        <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>3 adults</i></li> 
                        </span>
                        <span class="text-dark badge rounded-pill bg-light">
                          <li> <i>2 children</i></li> 
                        </span>
                      </div>
    
                      <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="btn btn-dark text-white ">BOOK NOW</a>
                        <a href="#" class="btn btn-outline-success text-black shadow">More Details...</a>
    
                      </div>
                    </div>
                    </div>
                  </div>
 <!-- ROOM 3-->

      
        <div class="col-3 my-3 mx-2">
                    <div class="card shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/r3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="fw-bolder mt-2">Suite Room</h5>
                          <h6> Tk. 29,000 per night</h6>
                        <div class="features mb-4">
                          <h6 class="mb-1 mt-4 fw-bold">Features</h6>
                          <span class="text-dark badge rounded-pill bg-light">
                            <li> <i>34 m2 room</i></li> 
                          </span>
                          <span class="text-dark badge rounded-pill bg-light">
                            <li> <i>2 rooms</i></li> 
                          </span>
                          <span class="text-dark badge rounded-pill bg-light">
                            <li><i>Balcony</i></li>
                          </span>
                          <span class="text-dark badge rounded-pill bg-light">
                            <li> <i>Tiled Floor</i> </li>
                          </span>
                        </div>
        
                        <div class="facilities mb-4">
                            <h6 class="mb-1 mt-3 fw-bold">Facilities</h6>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li> <i>Flat-Screened TV</i></li> 
                            </span>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li> <i> WiFi</i></li> 
                            </span>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li><i>Air-conditioner</i></li>
                            </span>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li> <i>Room Heater</i> </li>
                            </span>
                          </div>

                          <div class="facilities mb-4">
                            <h6 class="mb-1 mt-3 fw-bold">Guests</h6>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li> <i>3 adults</i></li> 
                            </span>
                            <span class="text-dark badge rounded-pill bg-light">
                              <li> <i>4 children</i></li> 
                            </span>
                          </div>
        
                          <div class="d-flex justify-content-between-evenly mb-3">
                            <a href="#" class="btn btn-dark text-white ">BOOK NOW</a>
                            <a href="#" class="btn btn-outline-success text-black shadow">More Details...</a>
        
                          </div>
                        </div>
                        </div>
                  </div>   
                  
        <div class="col-12 text-center mt-5">
            <a href="#" class="btn btn-outline-success fw-bolder shadow fs-4">MORE ROOMS <i class="bi bi-arrow-right-circle"></i></a>
        </div>
     </div>
    </div>

    <hr style="height:5px;border-width:10px; margin-top: 80px; color:black; background-color:black">

    <!-- OUR FACILITIES -->

    <h2 class="mt-5 pt-4 mb-4 fw-bolder text-center font-two "><br> <u>OUR FACILITIES</u>  <br> <br></h2>

    <div class="container">
      <div class="row justify-content-evenly px-5">
        <div class="col-2 text-center bg-white shadow rounded py-4 my-3">
          <img src="images/facilities/f1.jpg" width="80px">
          <h2 class="mt-3 text-secondary fs-3">WiFi</h2>
        </div>
        <div class="col-2 text-center bg-white shadow rounded py-4 my-3">
          <img src="images/facilities/f2.jpg" width="80px">
          <h2 class="mt-3 text-secondary fs-3">Spa</h2>
        </div>
        <div class="col-2 text-center bg-white shadow rounded py-4 my-3">
          <img src="images/facilities/f3.png" width="80px">
          <h2 class="mt-3 text-secondary fs-3">Parking</h2>
        </div>
        <div class="col-2 text-center bg-white shadow rounded py-4 my-3">
          <img src="images/facilities/f4.png" width="80px">
          <h2 class="mt-3 text-secondary fs-3">Gym</h2>
        </div>
      </div>

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

     <h2 class="mt-5 pt-3 mb-4 fw-bolder text-center font-two "><br> <u>CONTACT US</u>  <br> <br></h2>
  
     
     <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-8 p-4 mb-3 px-4 bg-white rounded">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.19411227074!2d90.46399274960936!3d23.76433850325562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0f70deb73%3A0x30c36498f90fe23!2sGulshan%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1670082979368!5m2!1sen!2sbd" width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="col-4">
        <div class="bg-white p-4 rounded mb-4 shadow">
          <h3 style="color:brown; margin-bottom: 15px;"> <u>Call Us</u>  </h3>
          <a href="tel: +215677981566" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +215677981566    
          </a>
          <br>
          <a href="tel: +818577982566" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +818577982566    
          </a>
          <br>
          <a href="tel: +418577983566" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-telephone-fill"></i>  +418577983566    
          </a>
        </div>

        <div class="bg-white p-4 rounded mb-4 shadow">
          <h3 style="color:brown; margin-top: 4px; margin-bottom: 15px;"> <u>Social Media</u>  </h3>
          <a href="mailto: fhsunaira@gmail.com" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-twitter me-2"></i> Email    
          </a>
          <br>
          <a href="https://www.facebook.com/The.Westin.Dhaka/" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-facebook me-2"></i> FaceBook    
          </a>
          <br>
          <a href="https://www.instagram.com/westindhaka/" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
            <i class="bi bi-instagram me-2"></i> Instagram    
          </a>
          <br>
          <a href="https://twitter.com/thewestindhaka?lang=en" target="_blank" class="d-inline-block mb-2 text-dark text-decoration-none"> 
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
<!-- What is this for I forgot -->
  
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