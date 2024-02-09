<?php
include 'config/db.php';
$obj = new Operations();
$obj->Login('admin');
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
    .hide{
      display: none;
    }
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="bg-light">
<?php include('nav.php'); ?>
      <!-- Main content -->
      <div class="container justify-content col-lg-5 mt-5">
        <div class="card">
          <div class="card-header btn-default ">
            <h5 class="text-center text-light"><i class="fa fa-user-circle"></i>   Admin Login</h5>
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
                <button type="submit" name="login" class="btn btn-info p-3 col-sm-6 form-control"><i class="loading-icon fa fa-spinner fa-spin hide" id="loader"></i>Login to Portal</button>
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
