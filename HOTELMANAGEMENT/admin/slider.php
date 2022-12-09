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
    <title>Admin Panel - Sliders</title>
    <?php require('extra/links.php'); ?>

</head>
<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">SLIDERS</h2>


        <!-- Slider Settings -->
        
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h2 class="title  fs-5">Images Settings</h2>
              <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#sliderSettings">
              <i class="bi bi-person-plus-fill"></i> Add
              </button>
            </div>

            <div class="row" id="slider-data">
            </div>
          </div>
        </div>


         <!-- Slider/Image Add -->

         <div class="modal fade" id="sliderSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form id="sliderSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Images to Slider</h5>
                </div>
                <div class="modal-body">

                  <div class="mb-3"> 
                    <label class="form-label fw-bolder">Picture</label>
                    <input type="file" name="slider_pic" id="slider_pic_inp" accept=".jpg, .jpeg, .png, .svg" class="form-control shadow-none" required>
                </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="button" onclick="slider_pic.value=''" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
        </div>
    
    
    
    
    
    
      </div>
  </div>
</div>
 

<?php require('extra/scripts.php'); ?>

<script>

  let sliderSettings_form = document.getElementById('sliderSettings_form');
  
  let slider_pic_inp = document.getElementById('slider_pic_inp');

  
  // Management Team Fetch

  sliderSettings_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
   });

   function add_image(){
    let data = new FormData(); //multipart data send = required for images
    data.append('picture',slider_pic_inp.files[0]); //files[0] = only first file chosen is taken, cannot take later choosen files
    data.append('add_image',''); //pass index value

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/slider_crud.php",true);
    

    xhr.onload = function(){

      console.log(this.responseText)
      var myModal = document.getElementById('sliderSettings');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      if(this.responseText == 'inv_img'){
        console.log("inv_img");
        }
        else{
          console.log('Image added');
          slider_pic_inp.value='';
          get_image();
        }   
    }
    xhr.send(data);

    

   }

   function get_image(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/slider_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      document.getElementById('slider-data').innerHTML = this.responseText;
     
    }

    xhr.send('get_image');

   }

   function remove_mem(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText == 1){
        get_image();
      }
      else{
        console.log('Error in deleting');
      }
     
    }

    xhr.send('remove_mem='+val);

   }






   window.onload = function(){
    get_image();
   }



</script>






</body>
</html>