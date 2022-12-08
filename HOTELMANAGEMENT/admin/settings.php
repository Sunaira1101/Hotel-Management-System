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
    <title>Admin Panel - Settings</title>
    <?php require('extra/links.php'); ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 overflow-hidden">
        <h2 class="mb-2 fs-3">SETTINGS</h2>

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h2 class="title  fs-5">General Settings</h2>
              <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#gSettings">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            
            <h6 class="card-subtitle mb-2 fw-bold">Title</h6>
            <p class="card-text">content</p>

            <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
            <p class="card-text">content</p>
            
          </div>
        </div>

        <div class="modal fade" id="gSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form>
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="site_title" class="form-control shadow-none">
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label">About Us</label>
                    <textarea name="site_about" class="form-control shadow-none" rows="6"></textarea>
                </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="button" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
        </div>
    
    
    
    
    
    
      </div>
  </div>
 







<?php require('extra/scripts.php'); ?>
</body>
</html>