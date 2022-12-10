 <?php
  
  require('../extra/func.php');
  require('../extra/connect.php');
  adminLogin();

  if(isset($_POST['add_member'])){
    
    $frm_data = filteration($_POST);

    $img_res = uploadImage($_FILES['picture'],ABOUT_FOLDER); //rname created in func.php

    if($img_res == 'inv_img'){
      echo $img_res;
    }
    else if($img_res == 'upd_failed'){
      echo $img_res;
    }
    else{
      $q = "INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
      $values = [$frm_data['name'],$img_res];
      $res = insert($q,$values,'ss');
      echo $res;
    }
  }

  if(isset($_POST['get_members'])){
    $res = selectAll('team_details'); //database table selected

    while($row = mysqli_fetch_assoc($res)){
      $path = ABOUT_IMG_PATH;
      echo <<<data
      <div class="col-2 mb-3">
        <div class="card bg-dark text-white">
          <img src="$path$row[picture]" class="card-img">
          <div class="card-img-overlay text-end">
            <button type="button" onclick="remove_mem($row[T_ID])" class="btn btn-danger btn-small shadow-none fs-6">
            <i class="bi bi-trash3-fill"></i> Delete
            </button>
          </div>
          <p class="card-text text-center p-4 py-2">$row[name]</p>
        </div>
      </div>
      data;
    }
  }

  if(isset($_POST['remove_mem'])){
    $frm_data = filteration($_POST);
    $values = [$frm_data['remove_mem']];

    $pre_q = "SELECT * FROM `team_details` WHERE `T_ID`=?"; //pre query
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['picture'], ABOUT_FOLDER)){
      $q = "DELETE FROM `team_details` WHERE `T_ID`=?";
      $res = delete($q, $values,'i');
      echo $res;

    }
    else{
      echo 0;
    }
   
  }


  
?>