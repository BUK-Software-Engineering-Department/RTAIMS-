<?php 

include 'config/db.php';
$obj = new Operations();
$obj->register();

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
<body>

    <?php include("nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  
    <!-- Main content -->
    <div class="container shadow " style="margin-top: 20vh;">
     <div class="mt-5">
          <div class="box-body p-3 bg-light rounded pd-20 mt-5 card-box mb-30">
            <h4 class="p-3  text-success text-center rounded"><b><img src="images/map.png" width="150">APPLICATION WAS SENT SUCCESSFUL!</b></h4><hr>


              <form method="post" enctype="multipart/form-data">
                <div class="form-group text-center row mt-2">
                 <div class="container col-md-10">
                    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Hey <?php echo $_SESSION['name'] ?>!</h4>
  <p>Your application was recieved successfully by FRSC Director (FRSC/20). You are strongly recommended that to keep the below registration number for reference purpose.</p>
  <hr>
  <p class="mb-0">You are strongly advised to keep visiting checking status for knowing your driving license status.</p>
  <div class="col-md-12"> <hr>

                    <h4>Your FRSC Number: </h4>
                    <h1 class="text-success"><i><?php echo $_SESSION['my_reg_no']; ?></i></h1>
                  </div>
                 </div>
                    
                </div>
                 <center>
                 
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
