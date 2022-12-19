 <?php
  
  require('../extra/func.php');
  require('../extra/connect.php');
  adminLogin();




 
  if(isset($_POST['get_users'])){
    
    $res = selectAll('user_info');
    $no=1;

    $data = "";
    
    while($row = mysqli_fetch_assoc($res)){
     
      $del_btn = "<button type='button' onclick='remove_user($row[id])' class='btn btn-danger btn-sm shadow-none'>
                    <i class='bi bi-trash'></i>
                  </button>";
      
      $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm shadow-none'>ACTIVE</button>";

      if(!$row['status']){
        $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-danger btn-sm shadow-none'>INACTIVE</button>";
      }

      $date = date("d-m-Y",strtotime($row['datetime']));

      $data.="
        <tr class='align-middle'>
          <td>$no</td>
          <td>$row[name]</td>
          <td>$row[email]</td>
          <td>$row[phonenum]</td>
          <td>$row[dob]</td>
          <td>$row[address]</td>
          <td>$date</td>
          <td>$status</td>
          <td>$del_btn</td>
          
        </tr>
      ";
      $no++;
    }
    echo $data;
  }

  if(isset($_POST['toggle_status'])){
    
    $frm_data = filteration($_POST);

    $q = "UPDATE `user_info` SET `status`=? WHERE `id`=?";
    $v =  [$frm_data['value'],$frm_data['toggle_status']];

    if(update($q,$v,'ii')){
      echo 1;
    }
    else{
      echo 0;
    }
  }


  if(isset($_POST['remove_user'])){
    $frm_data = filteration($_POST);

    $res = delete("DELETE FROM `user_info` WHERE `id`=?",[$frm_data['user_id']],'i');

    if($res){
      echo 1;
    }
    else{
      echo 0;
    }
  }

  if(isset($_POST['search_user'])){
    
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM `user_info` WHERE `name` LIKE ?";
    
    $res = select($query, ["%$frm_data[name]%"],'s');
    $no=1;

    $data = "";
    
    while($row = mysqli_fetch_assoc($res)){
     
      $del_btn = "<button type='button' onclick='remove_user($row[id])' class='btn btn-danger btn-sm shadow-none'>
                    <i class='bi bi-trash'></i>
                  </button>";
      
      $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm shadow-none'>ACTIVE</button>";

      if(!$row['status']){
        $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-danger btn-sm shadow-none'>INACTIVE</button>";
      }

      $date = date("d-m-Y",strtotime($row['datetime']));

      $data.="
        <tr class='align-middle'>
          <td>$no</td>
          <td>$row[name]</td>
          <td>$row[email]</td>
          <td>$row[phonenum]</td>
          <td>$row[dob]</td>
          <td>$row[address]</td>
          <td>$date</td>
          <td>$status</td>
          <td>$del_btn</td>
          
        </tr>
      ";
      $no++;
    }
    echo $data;
  }

  

  



  

?>