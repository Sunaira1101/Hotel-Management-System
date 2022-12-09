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
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">SETTINGS</h2>

        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h2 class="title  fs-5">General Settings</h2>
              <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#gSettings">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            
            <h6 class="card-subtitle mb-2 fw-bold">Title</h6>
            <p class="card-text" id="site_title"></p>

            <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
            <p class="card-text" id="site_about"></p>
            
          </div>
        </div>

        <div class="modal fade" id="gSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form id="gSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bolder">Title</label>
                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label fw-bolder">About Us</label>
                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
        </div>
    
    
    
    
    
    
      </div>
  </div>
 

<?php require('extra/scripts.php'); ?>

<script>
  let general_data;
  let gSettings_form = document.getElementById('gSettings_form');
  let site_title_inp = document.getElementById('site_title_inp');
  let site_about_inp =  document.getElementById('site_about_inp');

   function get_general(){
    let site_title = document.getElementById('site_title');
    let site_about=  document.getElementById('site_about');
    

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      general_data = JSON.parse(this.responseText);

      site_title.innerText = general_data.site_title;
      site_about.innerText = general_data.site_about;
      site_title_inp.value = general_data.site_title;
      site_about_inp.value = general_data.site_about;
    }

    xhr.send('get_general');
   }

   gSettings_form.addEventListener('submit',function(e){
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value);
   })

   function upd_general(site_title_val, site_about_val){
    
      let xhr = new XMLHttpRequest();
      xhr.open("POST","fetch/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

      xhr.onload = function(){

        var myModal = document.getElementById('gSettings')
        var modal = bootstrap.Modal.getInstance(myModal) 
        modal.hide();

        if(this.responseText == 1){
          console.log('data updated');
          get_general(); //fetch data asynchronously, fetch data from database and store in modal and edit modal
        }
        else{
          console.log("no changes made");
        }
      }

      xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
   }

   window.onload = function(){
    get_general();
   }



</script>






</body>
</html>