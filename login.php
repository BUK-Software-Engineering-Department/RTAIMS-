<?php
include 'config/db.php';
$obj = new Operations();
$obj->Stud_login('student');
$msg="";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Career Prediction:: Admin Login</title>
<?php include('include/head.php') ?>
<link rel="icon" type="text/css" href="images/logo.png">
<style type="text/css">
  .head span{
      font-size: 12px;
      color: black;
    }
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="bg-light">
<?php include('nav.php'); ?>
      <!-- Main content -->
      <div class="container justify-content col-lg-12">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-5 mt-5 border">
            <img src="images/bg1.jpg" height="450" width="550">
          </div>
          <div class="col-md-5 mt-5">
          <div class="card">
            <div class="card-header bg-info ">
              <h5 class="text-center text-light"><i class="fa fa-user-circle"></i>   Student Login</h5>
            </div>
            <div class="card-body rounded">
            <form role="form" action="" method="post">
                <?php $obj->Response() ?>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
               
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
                <center>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-info p-3 col-sm-6 form-control">Login to Portal</button>
                </div>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('bottom.php'); ?>
</div>
<!-- ./wrapper -->
</body>
</html>
