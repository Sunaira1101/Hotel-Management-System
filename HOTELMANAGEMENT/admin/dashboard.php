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

  <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
    <h2 class="mb-0">ADMIN PANEL</h2>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
  </div>
 







<?php require('extra/scripts.php'); ?>
</body>
</html>