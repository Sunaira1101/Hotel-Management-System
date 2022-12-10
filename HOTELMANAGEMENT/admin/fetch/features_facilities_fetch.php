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


  
?>