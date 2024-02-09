<?php 

include '../config/db.php';
$obj = new Operations();
$obj->approved("status",'approve');
$obj->delete_record('driver','id');
$rows = $obj->fetch('accident');


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Accident</title>
  <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">

<link rel="icon" type="text/css" href="../images/logo.png">
<style type="text/css">
  .head span{
      font-size: 12px;
      color: black;
    }
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<?php include('stud_nav.php'); ?>
<br><br>
<nav class="text-center navbar-dark pt-3  bg-info text-light">
  <a class="navbar-brand text-center" href="#"><b>ADMINISTRATOR DASHBAORD </b></a>
</nav>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container" style="margin-top: 10vh;">
      <!-- Content Header (Page header) -->
    
            <h4 class="p-3 bg-light text-success text-center rounded">MANAGE TRAFFIC ACCIDENT RECORD</h4>

              <?php $obj->Response() ?>
              <table class="table table-striped table-hover table-bordered table-responsive-sm" style="font-size: 12px; color: black;">
                <thead>
                  <tr>
                    <th>CASE ID</th>
                    <th>VEHICLE NAME</th>
                    <th>COLOR</th>
                    <th>VINs</th>
                    <th>LICENSE NO.</th>
                    <th>PARTY NAME</th>
                    <th>LOCATION</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody style="color: black;">

                  <tr>
                   <?php
                    $count = 1;
                     $approve = "";
                      $delete = "";
                    while($row = mysqli_fetch_assoc($rows)){
                    
            ?>
                  <tr>
                    <td><?php echo $row["case_id"]; ?></td>
                    <td><?php echo $row["vehicle_name"]; ?></td>
                    <td><?php echo $row["color"]; ?></td>
                    <td><?php echo $row["vins"]; ?></td>
                    <td><?php echo $row["license"]; ?></td>
                    <td><?php echo $row["party_name"]; ?></td>
                    <td><?php echo $row["location"]; ?></td>
                    <td><?php echo $row["accident_date"]; ?></td>
                    <td><?php echo $row["accident_time"]; ?></td>
                    <td>
                      <?php if ($row['status']=="") {
                      $approve = "";
                      $delete = "";

                        ?>
                        <div class="alert alert-warning">
                          Pending
                        </div>
                     <?php }else if($row['status']=="approve"){
                      $approve = "disabled";
                      $delete = "disabled";
                      ?>
                      <div class="alert alert-success">
                          Solved
                        </div>

                    <?php }else{
                      $approve = "";
                      $delete = "";

                        ?>
                        <div class="alert alert-warning">
                          Pending
                        </div>
                      <?php } ?>
                    </td>
                    <form method="post">
                      <td><button <?php echo $approve ?> onclick="return confirm('Confirm if you want to approve')" class="btn btn-success btn-sm" value="<?php echo $row['accident_id'] ?>" name="approve" type="submit">Resolved</button></td>
                      <td><button <?php echo $delete ?> onclick="return confirm('Confirm if you want to delete this sentence')" class="btn btn-warning btn-sm" value="<?php echo $row['accident_id'] ?>" name="btn_delete" type="submit">Reject</button></td>
                    </form>
                 </tr>
                  <?php
                }
                ?>
                    </tbody>
                  </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
