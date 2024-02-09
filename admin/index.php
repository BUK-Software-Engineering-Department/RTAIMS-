<?php 

include '../config/db.php';
$obj = new Operations();
$obj->login_access();
$rows = $obj->fetch_record('student','id',$_SESSION['user']);
$row = mysqli_fetch_array($rows);

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMINISTRATOR:: Dashboard</title>
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
  <a class="navbar-brand text-center" href="#"><b>ADMINISTRATOR DASHBAORD </b></a>
</nav>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
    
      <!-- Main content -->
      <section class="container-fluid col-lg-10 mb-2 " style="margin-top: 30px;">
        <div class="col-sm-12 col-sm-offset-4">
           <div class="box">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body p-3 rounded pd-20 card-box mb-30">
           <h4 class="p-3 bg-light text-success text-center rounded">WELCOME BACK ADMINISTRATOR</h4>

              <div class="card">
                <div class="card-body">
                  <div class="container col-lg-10 text-center" style="font-size: 30px; letter-spacing: 2px; word-spacing: 2px; line-height: 50px">
                    <div class="card">
                      <div class="card-header">
                        Total Traffic Accident
                      </div>
                      <div class="card-body text-heading">
                        <?php

                                        $data = $obj->record_c('accident', 'accident_id');                                          
                                        while($row = mysqli_fetch_array($data)) {
                                            echo number_format((float)$row["value_sum"], 0, '', ',') ;
                                       
                                   }
                                ?>
                      </div>
                    </div>
                  HEY ADMINISTRATOR</br>  WELCOME BACK ADMINISTRATOR <br>

                  <a href="manage-stud.php" class="btn btn-outline-info p-3 mt-5 col-sm-5">MANAGE TRAFFIC ROAD ACCIDENT ROAD</a>
                  </div>
                </div>
              </div>

            </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </section>
</div>

      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>

</div>
<!-- ./wrapper -->

</body>
</html>
