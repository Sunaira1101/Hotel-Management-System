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
    <title>Admin Panel - Rooms</title>
    <?php require('extra/links.php'); ?>

</head>


<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">ROOMS</h2>


        <!-- Rooms Settings -->
        
        <div class="card shadow border-0 mb-4">
          <div class="card-body">
            <div class="align-end mb-3">
                <!-- <h2 class="title  fs-5">Features</h2> -->
                <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#roomsSettings">
                <i class="bi bi-person-plus-fill"></i> Add
                </button>
              </div>

            <div class="table-responsive" style="height: 500px;overflow-y:scroll;">
                <table class="table table-hover border border-4 border-light">
                  <thead>
                    <tr class="bg-dark text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Guests</th>
                      <th scope="col">Quantity</th> <!-- how many rooms of each type available -->
                      <th scope="col">Availibility</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="rooms-data">
                  </tbody>
                </table>
            </div>   
          </div>
        </div>

        <!-- Room Settings -->

        <div class="card shadow border-0 mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="title  fs-5">Facilities</h2>
                <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#facilitiesSettings">
                <i class="bi bi-person-plus-fill"></i> Add
                </button>
              </div>

            <div class="table" style="height: 400px;overflow-y:scroll;">
                <table class="table table-hover border border-4 border-light">
                  <thead>
                    <tr class="bg-dark text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Name</th>
                      <th scope="col" width="40%">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="facilities-data">
                    
                  </tbody>
                </table>
            </div>   
          </div>
        </div>


      </div>
  </div>
</div>
 
<!-- Features Add -->

<div class="modal fade" id="featuresSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form id="featuresSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Features</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bolder">Name</label>
                    <input type="text" name="features_name" class="form-control shadow-none" required>
                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="reset" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
</div>

<!-- Facilities Add -->
<div class="modal fade" id="facilitiesSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form id="facilitiesSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Facilities</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bolder">Name</label>
                    <input type="text" name="facilities_name" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label fw-bolder">Icon</label>
                    <input type="file" name="facilities_icon" id="member_pic_inp" accept=".jpg, .jpeg, .png, .svg" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label fw-bolder">Description</label>
                    <textarea name="facilities_desc" class="form-control shadow-none" rows="4"></textarea>
                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="reset" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
         </div>



<?php require('extra/scripts.php'); ?>

<script>
  

  let featuresSettings_form = document.getElementById('featuresSettings_form');
  let facilitiesSettings_form = document.getElementById('facilitiesSettings_form');
  
  // Features Fetch

  featuresSettings_form.addEventListener('submit',function(e){
      e.preventDefault();
      add_features();
   });

   function add_features(){   // add data
    let data = new FormData(); //formdata = object
    data.append('name',featuresSettings_form.elements['features_name'].value); //form has one element(name), access value of that name
    data.append('add_features',''); //pass index value

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);

    xhr.onload = function(){

      var myModal = document.getElementById('featuresSettings');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      if(this.responseText == 1){
          console.log('New Features added');
          featuresSettings_form.elements['features_name'].value='';
          get_features();
        }
        else{
          console.log('New Features adding failed!');
        }   
    }

    xhr.send(data);

    

   }

   function get_features(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      document.getElementById('features-data').innerHTML = this.responseText;
    }

    xhr.send('get_features');
   }

   function remove_features(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText == 1){
        get_features();
      }
      else{
        console.log('Error in deleting');
      }
     
    }

    xhr.send('remove_features='+val); //val=id which wants to remove

   }




   // Facilities Fetch

   facilitiesSettings_form.addEventListener('submit',function(e){
      e.preventDefault();
      add_facilities();
   });

   function add_facilities(){   // add data
    let data = new FormData(); //formdata = object
    data.append('name',facilitiesSettings_form.elements['facilities_name'].value); 
    data.append('icon',facilitiesSettings_form.elements['facilities_icon'].files[0]);
    data.append('description',facilitiesSettings_form.elements['facilities_desc'].value);
    data.append('add_facilities',''); //pass index value

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);

    xhr.onload = function(){

      var myModal = document.getElementById('facilitiesSettings');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      if(this.responseText == 'inv_img'){
        console.log("inv_img");
        }
      else{
        console.log('Facilities added');
        facilitiesSettings_form.reset();
        get_facilities();
      }

    }

    xhr.send(data);
   }

   function get_facilities(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      document.getElementById('facilities-data').innerHTML = this.responseText;
    }

    xhr.send('get_facilities');
   }

   function remove_facilities(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/features_facilities_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText == 1){
        get_facilities();
      }
      else{
        console.log('Error in deleting');
      }
     
    }

    xhr.send('remove_facilities='+val); //val=id which wants to remove

   }

   window.onload = function(){
    get_features();
    get_facilities();
   }



</script>

</body>
</html>