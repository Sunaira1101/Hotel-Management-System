<?php
  require('extra/func.php');
  require('extra/connect.php');
  adminLogin();

  if(isset($_GET['seen'])){
    $frm_data = filteration($_GET);

    $q = "UPDATE `user_reach` SET `seen`=? WHERE `reach_ID`=?";
    $values = [1,$frm_data['seen']];
    $res = update($q,$values,'ii');
    echo $res;
  }

  
  if(isset($_GET['del'])){
    $frm_data = filteration($_GET);

    $q = "DELETE FROM `user_reach` WHERE `reach_ID`=?";
    $values = [$frm_data['del']];
    $res = update($q,$values,'i');
    echo $res;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
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
        <h2 class="mb-2 fs-3">USER QUERIES</h2>


        <!-- User Queries Settings -->
        
        <div class="card shadow border-0 mb-4">
          <div class="card-body">

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
 

<?php require('extra/scripts.php'); ?>

</body>
</html>