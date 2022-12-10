 <?php
  
  require('../extra/func.php');
  require('../extra/connect.php');
  adminLogin();

  if(isset($_POST['add_features'])){
    
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `features`(`name`) VALUES (?)";
    $values = [$frm_data['name']];
    $res = insert($q,$values,'s');
    echo $res; //row added, echo 1

  }

  if(isset($_POST['get_features'])){
    $res = selectAll('features'); //database table selected
    $no=1;

    while($row = mysqli_fetch_assoc($res)){
     
      echo <<<data
       <tr>
        <td>$no</td>
        <td>$row[name]</td>
        <td>
          <button type="button" onclick="remove_features($row[feature_ID])" class="btn btn-danger btn-small shadow-none fs-6">
          <i class="bi bi-trash3-fill"></i> Delete
          </button>
        </td>   
       </tr>
      data;
      $no++;
    }
  }

  if(isset($_POST['remove_features'])){
    $frm_data = filteration($_POST);
    $values = [$frm_data['remove_features']];

    $q = "DELETE FROM `features` WHERE `feature_ID`=?";
    $res = delete($q, $values,'i');
    echo $res;
   
  }


  // Facilities section fetch

  if(isset($_POST['add_facilities'])){
    
    $frm_data = filteration($_POST);

    $img_res = uploadImage($_FILES['icon'],FACILITIES_FOLDER); //rname created in func.php

    if($img_res == 'inv_img'){
      echo $img_res;
    }
    else if($img_res == 'upd_failed'){
      echo $img_res;
    }
    else{
      $q = "INSERT INTO `facilities`(`icon`, `name`, `description`) VALUES (?,?,?)";
      $values = [$img_res,$frm_data['name'],$frm_data['desc']];
      $res = insert($q,$values,'sss');
      echo $res;
    }
  }

  if(isset($_POST['get_features'])){
    $res = selectAll('features'); //database table selected
    $no=1;

    while($row = mysqli_fetch_assoc($res)){
     
      echo <<<data
       <tr>
        <td>$no</td>
        <td>$row[name]</td>
        <td>
          <button type="button" onclick="remove_features($row[feature_ID])" class="btn btn-danger btn-small shadow-none fs-6">
          <i class="bi bi-trash3-fill"></i> Delete
          </button>
        </td>   
       </tr>
      data;
      $no++;
    }
  }


  
?>