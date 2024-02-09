<?php 

include 'config/db.php';
$obj = new Operations();
$rows = $obj->fetch_record('driver','phone',$_SESSION['phone']);
$row = mysqli_fetch_array($rows);

 ?>
<!DOCTYPE html>
<html>
<title>FRSC</title>
<?php include('include/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/s.css">
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

<?php include('nav.php'); ?>
<br><br>

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
    
      <!-- Main content -->
      <section class="container-fluid col-lg-10 mb-2 " style="margin-top: 17vh;">
        <div class="col-sm-12 col-sm-offset-4">
           <div class="box">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body p-3 rounded pd-20 card-box mb-30">
           <h4 class="p-3 bg-light text-success text-center rounded">WELCOME TO AN ONLINE DRIVING LICENCE</h4>

              <div class="container card">
                <div class="card-body">
                  <div class="container col-lg-4 text-center" style="font-size: 30px; letter-spacing: 2px; word-spacing: 2px; line-height: 50px">
                    KNOW YOUR APPLICATION STATUS
                    <hr>
                    <form method="post" enctype="multipart/form-data">
                <div class="form-group row mt-5">
                  <div class="alert alert-warning" role="alert" style="font-size: 16px;">
                    <h4 class="alert-heading">Hey <?php echo $row['full_name']; ?>!</h4>

                    <p>Your Driving Licence application number is: <h4 class="alert-heading"><?php echo $row['reg_no'] ?></h4></p>
                    <hr>
                  </div>
                </div>
              </form>

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
