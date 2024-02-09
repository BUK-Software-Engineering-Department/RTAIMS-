<?php 

include 'config/db.php';
$obj = new Operations();
$obj->retrive();
// $rows = $obj->fetch_record('driver', 'id',$_SESSION['user']);
// $row = mysqli_fetch_array($rows);

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
      <section class="container-fluid col-lg-8 mb-2 " style="margin-top: 17vh;">
        <div class="col-sm-12 col-sm-offset-4">
           <div class="box">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body p-3 rounded pd-20 card-box mb-30">

              <div class=" card">
                <?php $obj->response(); ?>
                <div class="card-header btn-default text-light">
                  <div class="container col-lg-10 text-center" style="font-size: 30px; letter-spacing: 2px; word-spacing: 2px; line-height: 50px">
                    RETRIEVE YOUR DRIVER'S LICENCE ID
                  </div>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                <div class="form-group row mt-5">
                   <label for="inputPassword" class="col-sm-3 col-form-label"><h6>Email address</h6></label>

                  <div class="col-sm-9">                   
                    <input type="email" name="email" class=" form-control " placeholder="Your email address" required>
                  </div><br>
                </div>
                <div class="form-group row mt-2">
                 <label for="inputPassword" class="col-sm-3 col-form-label"><h6>Phone number</h6></label>

                  <div class="col-sm-9">                   
                    <input type="text" name="phone" class=" form-control" placeholder="Your phone number" required>
                  </div><br>
                </div>
                 <center>
                  <div class="form-group">
                    <button type="submit" name="login" class="pb-2 btn btn-info p-2 col-sm-4 mt-3">CHECK STATUS</button>
                </div>
              </center>
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
