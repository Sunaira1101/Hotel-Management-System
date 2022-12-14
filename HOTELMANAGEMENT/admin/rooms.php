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
            <div class="text-end mb-3">
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
                      <th scope="col">Area</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th> <!-- how many rooms of each type available -->
                      <th scope="col">Guests</th>
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
      </div>
  </div>
</div>
 
<!-- Rooms Add -->

<div class="modal fade" id="roomsSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">

            <form id="roomsSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-bolder">Add Rooms</h5>
                </div>

                <div class="modal-body">
                  <div class="row">
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Name</label>
                      <input type="text" name="name" class="form-control shadow-none" required>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Area</label>
                      <input type="number" name="area" class="form-control shadow-none" required>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Price</label>
                      <input type="number" name="price" class="form-control shadow-none" required>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Quantity</label>
                      <input type="number" name="quantity" class="form-control shadow-none" required>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Adults(Max)</label>
                      <input type="number" name="adult" class="form-control shadow-none" required>
                    </div>
                    <div class="col-6 mb-3">
                      <label class="form-label fw-bolder">Children(Max)</label>
                      <input type="number" name="children" class="form-control shadow-none" required>
                    </div>
                    <div class="col-12 mb-4">
                      <label class="form-label fw-bolder">Features</label>
                      <div class="row">
                        <?php 
                          $res = selectAll('features');
                          while($opt = mysqli_fetch_assoc($res)){
                            echo"
                              <div class='col-3 mb-1'>
                                <label> 
                                  <input type='checkbox' name='features' value='$opt[feature_ID]' class='form-check-input shadow-none'>
                                  $opt[name]
                                </label>
                              </div>
                            ";
                          }
                        ?>
                      </div>
                    </div>
                    <div class="col-12 mb-4">
                      <label class="form-label fw-bolder">Facilities</label>
                      <div class="row">
                        <?php 
                          $res = selectAll('facilities');
                          while($opt = mysqli_fetch_assoc($res)){
                            echo"
                              <div class='col-3 mb-1'>
                                <label> 
                                  <input type='checkbox' name='facilities' value='$opt[facilities_ID]' class='form-check-input shadow-none'>
                                  $opt[name]
                                </label>
                              </div>
                            ";
                          }
                        ?>
                      </div>
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label fw-bolder">About Room</label>
                      <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                    </div>
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





<?php require('extra/scripts.php'); ?>

<script>
  

  let roomsSettings_form = document.getElementById('roomsSettings_form');
  
  
  // Rooms Fetch

  roomsSettings_form.addEventListener('submit',function(e){
      e.preventDefault();
      add_rooms();
   });

   function add_rooms(){   
    let data = new FormData(); 
    data.append('name',roomsSettings_form.elements['name'].value); 
    data.append('area',roomsSettings_form.elements['area'].value); 
    data.append('price',roomsSettings_form.elements['price'].value); 
    data.append('quatity',roomsSettings_form.elements['quatity'].value); 
    data.append('adult',roomsSettings_form.elements['adult'].value); 
    data.append('children',roomsSettings_form.elements['children'].value); 
    data.append('desc',roomsSettings_form.elements['desc'].value); 
    data.append('add_rooms',''); 

    let features = [];

    roomsSettings_form.elements['features'].forEach(opt =>{ //foreach traverses array
      if(opt.checked){
        features.push(opt.value);
      }
    });

    let facilities = [];

    roomsSettings_form.elements['facilities'].forEach(opt =>{ //foreach traverses array
      if(opt.checked){
        facilities.push(opt.value);
      }
    });

    data.append('features',JSON.stringify(features)); //convert to array
    data.append('facilities',JSON.stringify(facilities));

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/rooms_fetch.php",true);

    xhr.onload = function(){

      var myModal = document.getElementById('roomsSettings');
      var modal = bootstrap.Modal.getInstance(myModal); 
      modal.hide();

      if(this.responseText == 1){
          console.log('New Features added');
          roomsSettings_form.reset();
          // get_features();
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