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
    <h2 class="mt-5 pt-4 mb-1 fw-bolder text-center font-two "> <u>BOOK OUR ROOMS</u>  <br></h2>
    <p style="color:rgb(45, 40, 16); font-size: small; font-style: italic; margin-top: 20px; font-size: medium; display: block; margin-left: auto; margin-right: auto; width: 60%;">
      Located in the prestigious downtown business district,
      Hotel Paradise is the foremost name of luxury. The hotel is beautifully designed 
      boasted with Millennium modern outlook with a touch of local culture. Get to know more about our
      rooms here, and choose the desired room you want to spend your day in! <br><br> <br><br><br>
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-3">
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
        <div class="card mb-3">
          <div class="row g-0 p-4 align-items-center">
            <div class="col-md-5">
              <img src="images/rooms/r1.jpg" class="img-fluid rounded-start" >
            </div>

            <div class="col-md-5">
              <img src="" class="img-fluid rounded-start" >
            </div>
            <div class="col-md-2">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>




      </div>



    </div>
  </div>

  




 
  
<?php require('footer.php'); ?>



</body>
</html>