<?php
  
  require('../extra/func.php');
  require('../extra/connect.php');
  adminLogin();

  if(isset($_POST['add_image'])){

    $img_res = uploadImage($_FILES['picture'],SLIDER_FOLDER); //rname created in func.php

    if($img_res == 'inv_img'){
      echo $img_res;
    }
    else if($img_res == 'upd_failed'){
      echo $img_res;
    }
    else{
      $q = "INSERT INTO `slider`(`image`) VALUES (?)";
      $values = [$img_res];
      $res = insert($q,$values,'s');
      echo $res;
    }
  }

  if(isset($_POST['get_image'])){
    $res = selectAll('slider'); //database table selected

    while($row = mysqli_fetch_assoc($res)){
      $path = SLIDER_IMG_PATH;
      echo <<<data
      <div class="col-4 mb-3">
        <div class="card bg-dark text-white">
          <img src="$path$row[image]" class="card-img"> 
          <div class="card-img-overlay text-end">
            <button type="button" onclick="remove_img($row[slider_ID])" class="btn btn-danger btn-small shadow-none fs-6">
            <i class="bi bi-trash3-fill"></i> Delete
            </button>
          </div>
        </div>
      </div>
      data;
    }
  }

  if(isset($_POST['remove_img'])){
    $frm_data = filteration($_POST);
    $values = [$frm_data['remove_img']];

    $pre_q = "SELECT * FROM `slider` WHERE `slider_ID`=?"; //pre query
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['image'], SLIDER_FOLDER)){
      $q = "DELETE FROM `slider` WHERE `slider_ID`=?";
      $res = delete($q, $values,'i');
      echo $res;

    }
    else{
      echo 0;
    }
   
  }


  
?>