<?php
  require('extra/func.php');
  require('extra/connect.php');
  adminLogin();

  if(isset($_GET['seen'])){
    $frm_data = filteration($_GET);

    $q = "UPDATE `user_reach` SET `seen`=? WHERE `reach_ID`=?";
    $values = [1,$frm_data['seen']];
    $res = update($q,$values,'ii');
    
  }

  
  if(isset($_GET['del'])){
    $frm_data = filteration($_GET);

    $q = "DELETE FROM `user_reach` WHERE `reach_ID`=?";
    $values = [$frm_data['del']];
    $res = update($q,$values,'i');
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
    <?php require('extra/links.php'); ?>

</head>

<style>
table, th,td {
  border:4px solid light;
}
</style>

<body style="color:rgb(37, 22, 4) ; background-color:rgb(243, 228, 210);">

 <?php require('extra/header.php'); ?>
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 ms-auto p-4 ">
        <h2 class="mb-2 fs-3">FEATURES & FACILITIES</h2>


        <!-- Feautures Settings -->
        
        <div class="card shadow border-0 mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="title  fs-5">Features</h2>
                <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#featuresSettings">
                <i class="bi bi-person-plus-fill"></i> Add
                </button>
              </div>

            <div class="table" style="height: 400px;overflow-y:scroll;overflow-x:scroll;">
                <table class="table table-hover border border-4 border-light">
                  <thead class="sticky-top">
                    <tr class="bg-dark text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No.</th>
                      <th scope="col" width="30%">Message</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $q = "SELECT * FROM `user_reach` ORDER BY `reach_ID` DESC"; //so that newer msgs at top
                      $data = mysqli_query($db, $q);
                      $no=1;

                      while($row = mysqli_fetch_assoc($data)){
                        $seen='';
                        if($row['seen']!=1){
                          $seen="<a href='?seen=$row[reach_ID]' class='btn btn-sm rounded-pill btn-secondary'>MARK AS READ</a>";
                        }
                        $seen.="<a href='?del=$row[reach_ID]' class='btn btn-sm rounded-pill btn-danger mt-2'>DELETE</a>";

                        echo<<<query
                         <tr>
                           <td>$no</td>
                           <td>$row[name]</td>
                           <td>$row[email]</td>
                           <td>$row[phone]</td>
                           <td>$row[message]</td>
                           <td>$row[date]</td>
                           <td>$seen</td>
                         </tr>

                        query;
                        $no++;
                      }
                    ?>
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

<?php require('extra/scripts.php'); ?>

<script>
  

  let featuresSettings_form = document.getElementById('featuresSettings_form');
  

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
          get_members();
        }
        else{
          console.log('New Features adding failed!');
        }



      
    }

    xhr.send(data);

    

   }

   function get_members(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      document.getElementById('team-data').innerHTML = this.responseText;
     
    }

    xhr.send('get_members');

   }

   function remove_mem(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText == 1){
        get_members();
      }
      else{
        console.log('Error in deleting');
      }
     
    }

    xhr.send('remove_mem='+val);

   }






   window.onload = function(){
    get_general();
    get_contacts();
    get_members();
   }



</script>

</body>
</html>