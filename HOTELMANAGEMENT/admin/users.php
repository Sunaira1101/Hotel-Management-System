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
    <title>Admin Panel - Users</title>
    <?php require('extra/links.php'); ?>

</head>


<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">USERS</h2>


        <!-- Rooms Settings -->
        
        <div class="card shadow border-0 mb-4">
          <div class="card-body">
            <div class="text-end mb-3">
                <!-- <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#roomsSettings">
                <i class="bi bi-person-plus-fill"></i> Add
                </button> -->
              </div>

            <div class="table-responsive">
                <table class="table table-hover border border-4 border-light" style="min-width: 1300px;">
                  <thead>
                    <tr class="bg-dark text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No.</th>
                      <th scope="col">DOB</th> 
                      <th scope="col">Address</th>
                      <th scope="col">Date of Reg.</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="users-data">
                  </tbody>
                </table>
            </div>   
          </div>
        </div>
      </div>
  </div>
</div>
 







<?php require('extra/scripts.php'); ?>

<script>
  

 

   
   function get_rooms(){
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/rooms_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      document.getElementById('rooms-data').innerHTML = this.responseText;
    }

    xhr.send('get_rooms');
   }



   function toggle_status(id,val){
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/rooms_fetch.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText == 1){
          console.log('Status Changed');
          get_rooms();
        }
        else{
          console.log('Status Changing Failed!');
        }  
    }

    xhr.send('toggle_status='+id+'&value='+val);
   }

   

   function remove_room(room_id){
    if(confirm("Do you want to delete this room?")){
      let data = new FormData();
      data.append('room_id',room_id); 
      data.append('remove_room',''); 

      let xhr = new XMLHttpRequest();
      xhr.open("POST","fetch/rooms_fetch.php",true);
      

      xhr.onload = function(){

      if(this.responseText == 1){
        console.log('Room deleted');
        get_rooms();
        }
        else{
          console.log('Room not deleted');
        }   
      }
      
        xhr.send(data);

    }
   }


  
















   window.onload = function(){
    get_rooms();
   }



</script>

</body>
</html>