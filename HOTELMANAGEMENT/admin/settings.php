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

        <!-- General Settings -->
        
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

        <!-- General Settings Edit -->

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

        <!-- Contact Us Settings -->

        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h2 class="title  fs-5">Contact Us Settings</h2>
              <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#contactSettings">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>

            <div class="row fs-4">
              <div class="col-6">
                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">Address</h2>
                  <p class="card-text fs-6" id="address"></p>
                </div>
                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">Google Map</h2>
                  <p class="card-text fs-6" id="gmap"></p>
                </div>
                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">Phone No.</h2>
                  <p class="card-text fs-6 mb-1">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="phone1"></span>
                  </p>
                  <p class="card-text fs-6 mb-1">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="phone2"></span>
                  </p>
                  <p class="card-text fs-6">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="phone3"></span>
                  </p>
                </div>
                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">Email</h2>
                  <p class="card-text fs-6" id="email"></p>
                </div>
              </div>

              <div class="col-6">
                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">Social Media</h2>
                  <p class="card-text fs-6 mb-1">
                    <i class="bi bi-facebook me-2"></i>
                      <span id="fb"></span>
                  </p>
                  <p class="card-text fs-6 mb-1">
                  <i class="bi bi-instagram me-2"></i>
                    <span id="insta"></span>
                  </p>
                  <p class="card-text fs-6">
                  <i class="bi bi-twitter me-2"></i>
                    <span id="tw"></span>
                  </p>
                </div>

                <div class="mb-4">
                  <h2 class="card-subtitle mb-2 fw-bold fs-6">iFrame</h2>
                  <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                  
                </div>
              </div>

            </div>    
          </div>
        </div>

        <!-- Contact Us Edit -->

        <div class="modal fade" id="contactSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">

            <form id="contactSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Contact Us Settings</h5>
                </div>
                <div class="modal-body">

                  <div class="container-fluid p-0">
                    <div class="row">


                      <div class="col-6">
                        <div class="mb-3">
                          <label class="form-label fw-bolder">Address</label>
                          <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bolder">Google Map</label>
                          <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bolder">Phone No.</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" name="phone1" id="phone1_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" name="phone2" id="phone2_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" name="phone3" id="phone3_inp" class="form-control shadow-none" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-bolder">Email</label>
                          <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
                        </div>
                      </div>


                      <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label fw-bolder">Social Media</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-facebook me-2"></i></span>
                              <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-instagram me-2"></i></i></span>
                              <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-twitter me-2"></i></span>
                              <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label fw-bolder">iFrame</label>
                            <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                          </div>
                      </div>
                     

                    </div>
                  </div>
                  
                  
                  
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
           
          </div>
        </div>


        <!-- Management Team Settings -->
        
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h2 class="title  fs-5">Management Team Settings</h2>
              <button type="button" class="btn btn-dark btn-small shadow-none" data-bs-toggle="modal" data-bs-target="#teamSettings">
              <i class="bi bi-person-plus-fill"></i> Add
              </button>
            </div>

            <div class="row">

            </div>
          </div>
        </div>


         <!-- Management Team Add -->

         <div class="modal fade" id="teamSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">

            <form id="teamSettings_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Management Team Member</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bolder">Name</label>
                    <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label fw-bolder">Picture</label>
                    <input type="file" name="member_pic" id="member_pic_inp" accept=".jpg, .jpeg, .png, .svg" class="form-control shadow-none" required>
                </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-light shadow-none" style="background-color: rgb(97, 226, 183);">Submit</button>
                  <button type="button" onclick="" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Cancel</button>
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
  let general_data, contacts_data;
  let gSettings_form = document.getElementById('gSettings_form');
  let site_title_inp = document.getElementById('site_title_inp');
  let site_about_inp =  document.getElementById('site_about_inp');

  let contactSettings_form = document.getElementById('contactSettings_form');

  let teamSettings_form = document.getElementById('teamSettings_form');
  let member_name_inp = document.getElementById('member_name_inp');
  let member_name_pic = document.getElementById('member_name_pic');

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
   });

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

  // Settings Fetch

   function get_contacts(){

    let contacts_p_id = ['address','gmap','phone1','phone2','phone3','email','fb','insta','tw']; //.innertext id are these all
    let iframe = document.getElementById('iframe');


    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      contacts_data = JSON.parse(this.responseText);
      contacts_data = Object.values(contacts_data);  //object values stored in array form
      // console.log(contacts_data);
      
      for(i=0;i<contacts_p_id.length;i++){
        document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
      }
      iframe.src = contacts_data[10];
      contacts_inp(contacts_data); 
   
    }

    xhr.send('get_contacts');
   }

   function contacts_inp(contacts_data){
     let contacts_inp_id = ['address_inp','gmap_inp','phone1_inp','phone2_inp','phone3_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];

     for(i=0;i<contacts_inp_id.length;i++){
      document.getElementById(contacts_inp_id[i]).value = contacts_data[i+1];
     }

   }

   contactSettings_form.addEventListener('submit',function(e){
    e.preventDefault();
    upd_contacts();
   })

   function upd_contacts(){
    let index = ['address','gmap','phone1','phone2','phone3','email','fb','insta','tw','iframe'];
    let contacts_inp_id = ['address_inp','gmap_inp','phone1_inp','phone2_inp','phone3_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];

    let data_str="";

    for(i=0;i<index.length;i++){
      data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
    }

    data_str += "upd_contacts";

    let xhr = new XMLHttpRequest();
    xhr.open("POST","fetch/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      
        var myModal = document.getElementById('contactSettings')
        var modal = bootstrap.Modal.getInstance(myModal) 
        modal.hide();

        if(this.responseText == 1){
          console.log('data updated');
          get_contacts(); //fetch data asynchronously, fetch data from database and store in modal and edit modal
        }
        else{
          console.log("no changes made");
        }
    }

    xhr.send(data_str);


   
  
  }

  // Management Team Fetch

  teamSettings_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_member();
   });

   function add_member(){

   }






   window.onload = function(){
    get_general();
    get_contacts();
   }



</script>






</body>
</html>