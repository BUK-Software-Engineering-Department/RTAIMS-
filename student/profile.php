<?php 

include '../config/db.php';
$obj = new Operations();
$rows = $obj->fetch_record('student','id',$_SESSION['user']);
$row = mysqli_fetch_array($rows);

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
  <a class="navbar-brand text-center" href="#"><b>STUDENT PROFILE</b></a>
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
           <h4 class="p-3 bg-light text-success text-center rounded">MY PROFILE</h4>

              <div class="card">
                <div class="card-body">
                  <div class="container col-lg-10" style="font-size: 20px; letter-spacing: 2px; word-spacing: 2px; line-height: 50px">
                    <div class="form-row">
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                        NAME: <br>
                        GENDER: <br>
                        ADDRESS: <br>
                        DATE OF BIRTH: <br>
                        PHONE: <br>
                        APPLICATION NO: <br>

                      </div>
                      <div class="col-md-8">

                  <b style="text-transform: uppercase;"><?php echo $row['first_name']." ".$row['last_name']; ?></b><br>
                  <b style="text-transform: uppercase;"><?php echo $row['gender']; ?></b><br>
                  <b style="text-transform: uppercase;"><?php echo $row['address']; ?></b><br>
                  <b style="text-transform: uppercase;"><?php echo $row['dob']; ?></b><br>
                  <b style="text-transform: uppercase;"><?php echo $row['phone']; ?></b><br>
                  <b style="text-transform: uppercase;"><?php echo $row['reg_no']; ?></b><br>

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
