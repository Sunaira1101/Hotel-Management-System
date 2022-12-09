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
  
?>