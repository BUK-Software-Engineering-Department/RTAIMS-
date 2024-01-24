<?php 

include '../config/db.php';
$obj = new Operations();
$obj->login_access();
$obj->change_password();

 ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
</head>
<body>

    <?php include("stud_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  
    <!-- Main content -->
     <div class="container col-md-8 " style="margin-top: 20vh;">
        <form role="form" action="" method="post">
          <div class="box-body p-3 rounded pd-20 mt-5 card-box mb-30">
            <h4 class="p-3 bg-light text-success text-center rounded">MANAGE PASSWORD</h4>

              <?php $obj->Response() ?>
              <form method="post">
                <div class="form-group row mt-5">
                   
                  <label for="inputPassword" class="col-sm-2 col-form-label">Old password</label>
                  <div class="col-md-10"> 
                    <input type="text" name="old" class="form-control-sm form-control" placeholder="Old password " required>
                  </div><br><br>
                  <label for="inputPassword" class="col-sm-2 col-form-label">New password</label>
                  <div class="col-md-10"> 
                    <input type="text" name="new" class="form-control-sm form-control" placeholder="New password " required>
                  </div><br><br>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Confirm password</label>
                  <div class="col-md-10"> 
                    <input type="text" name="confirm" class="form-control-sm form-control" placeholder="Confirm password " required>
                  </div><br><br>
                </div>
                 <center>
                  <div class="form-group">
                    <button type="submit" name="change" class="pb-4 btn btn-info p-4 col-sm-4 mt-3">Change</button>
                </div>
              </center>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
