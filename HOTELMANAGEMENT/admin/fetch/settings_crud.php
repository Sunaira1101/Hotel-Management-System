 <?php
  
  require('../extra/func.php');
  require('../extra/connect.php');
  adminLogin();

  if(isset($_POST['get_general'])){
   
    $q = "SELECT * FROM `settings` WHERE `S_ID`=?";
    $values = [1]; // as one value entry
    $res = select($q, $values, "i"); //s_id datatype = integer = i
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
  }

  if(isset($_POST['upd_general'])){
    
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `S_ID`=?";
    $values = [$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q, $values, 'ssi');
    echo $res;
  }

  if(isset($_POST['get_contacts'])){
   
    $q = "SELECT * FROM `contact_info` WHERE `C_ID`=?";
    $values = [1]; // as one value entry
    $res = select($q, $values, "i"); //s_id datatype = integer = i
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
  }

  if(isset($_POST['upd_contacts'])){
    
    $frm_data = filteration($_POST);

    $q = "UPDATE `contact_info` SET `address`=?,`gmap`=?,`phone1`=?,`phone2`=?,`phone3`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`iframe`=? WHERE `C_ID`=?";
    $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['phone1'],$frm_data['phone2'],$frm_data['phone3'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['iframe'],1];
    $res = update($q, $values, 'ssssssssssi');
    echo $res;
  }

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


  
?>