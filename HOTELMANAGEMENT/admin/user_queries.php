<?php
  require('extra/func.php');
  require('extra/connect.php');
  adminLogin();
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    <?php require('extra/links.php'); ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">USER QUERIES</h2>


        <!-- User Queries Settings -->
        
        <div class="card shadow border-0 mb-4">
          <div class="card-body">

            <div class="table" style="height: 400px;overflow-y:scroll;">
                <table class="table table-hover border border-4 border-light">
                  <thead class="sticky-top">
                    <tr class="bg-dark text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No.</th>
                      <th scope="col">Message</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                  </tbody>
                </table>
            </div>   
            

            
            </div>
        </div>
    
    
      </div>
  </div>
</div>
 

<?php require('extra/scripts.php'); ?>

</body>
</html>