<?php

//FRONTEND
define('SITE_URL','http://127.0.0.1/CSE311_PROJECT/HOTELMANAGEMENT/');
define('ABOUT_IMG_PATH', SITE_URL.'images/about/');
define('SLIDER_IMG_PATH', SITE_URL.'images/firstslider/');
define('FACILITIES_IMG_PATH', SITE_URL.'images/facilities/');

//BACKEND
define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/CSE311_PROJECT/HOTELMANAGEMENT/images/');
define('ABOUT_FOLDER','about/');
define('SLIDER_FOLDER','firstslider/');
define('FACILITIES_FOLDER','facilities/');

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo "<script>
          window.location.href = 'index.php';
        </script>";
        exit;
    }
    // session_regenerate_id(true); // old sessions removed, creates new session
}

function redirect($url){
    echo "<script>
    window.location.href = '$url';
    </script>";
    exit;
}



function alert($type, $msg){
    
    $alert_class = ($type == "success") ? "alert-success" : "alert-danger";
    
    echo <<<alert
         <div class="alert $alert_class alert-dismissible fade show custom-alert" role="alert">
           <strong class="me-3">$msg</strong>\
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
    alert;
}

function uploadImage($image,$folder){
  $valid_mime = ['image/jpg','image/jpeg'.'image/png','image/svg+xml'];
  $img_mime = $image['type'];

  if(in_array($img_mime,$valid_mime)){
    return 'inv_img'; //invalid image, can also be 0/1
  }
  else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION); //extract extension of image(jpg,png...)
    $rname = 'IMG_'.random_int(11111,99999).".$ext"; //generate random name , .$ext concatenate
    //e.g. IMG_92345.png
    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname; //after folder(about) what name image is stored as(rname)
    
    if(move_uploaded_file($image['tmp_name'],$img_path)){ //move img from temporary location and moved to $img_path destination 
       return $rname;
    }
    else{
      return 'upd_failed';
    }
  }
}

function deleteImage($image,$folder){
  if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
    return true;
  }
  else{
    return false;
  }
}



?>