<?php
  require('extra/func.php');
  adminLogin();
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('extra/links.php'); ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

  <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h2 class="mb-0 font-three">HOTEL PARADISE</h2>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
  </div>

  <div class="col-2 bg-dark border-top border-3 border-secondary">
    <div class="panel">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid flex-column align-items-stretch">   <!--to make one after another not sideways-->
      <h2 class="mt-2 text-center text-white fs-4">ADMIN PANEL</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-column mt-3 align-items-stretch" id="adminDropdown">
        
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Settings</a>
          </li>
         
        </ul>

        
  
       
      </div>
    </div>
  </nav>
</div>





  </div>
 







<?php require('extra/scripts.php'); ?>
</body>
</html>