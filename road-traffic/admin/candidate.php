<?php 

include '../config/db.php';
$obj = new Operations();
$obj->login_access();
$obj->register();
$obj->delete_record('driver','id');
$rows = $obj->fetch('driver');


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student:: Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">

<link rel="icon" type="text/css" href="images/logo.png">
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
  <a class="navbar-brand text-center" href="#"><b>ADMI DASHBAORD </b></a>
</nav>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container" style="margin-top: 10vh;">
      <!-- Content Header (Page header) -->
    
            <h4 class="p-3 bg-light text-success text-center rounded">DRIVER'S RECORD</h4>

              <?php $obj->Response() ?>
              <table class="table table-striped table-hover table-bordered table-responsive-sm" style="font-size: 12px; color: black;">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>LGA</th>
                    <th>Address</th>
                    <th>Status</th>
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
                    <td><img src="../images/<?php echo $row['image'] ?>" style="height: 100px; width: 80px;"></td>
                    <td><?php echo $row["reg_no"]; ?></td>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["dob"]; ?></td>
                    <td><?php echo $row["state"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    
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
