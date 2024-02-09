<?php 

include 'config/db.php';
$obj = new Operations();
$rows = $obj->fetch_record('driver','reg_no',$_SESSION['reg_no']);
$row = mysqli_fetch_array($rows);

$my_days="";
$dates1 = strtotime($row['issue_date']);
$dates2 = strtotime($row['expire_date']);

      $diff = $dates2 - $dates1;

      $hours = ($diff / 3600);

      $days = ($hours /24);

      $hours = ($hours % 24);

      if ($days < 0) {

        $my_days = ceil($days);
        // code...
      }else{
        $my_days = floor($days);
      }

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
           <h4 class="p-3 bg-light text-success text-center rounded">WELCOME TO ONLINE DRIVING LICENCE SYSTEM</h4>

              <div class="container card">
                <div class="card-body">
                  <div class="container col-lg-6 text-center" style="font-size: 30px; letter-spacing: 2px; word-spacing: 2px; line-height: 50px">
                    MY DRIVING LICENCE STATUS
                    <hr>
                    <form method="post" enctype="multipart/form-data">
                <div class="form-group row mt-3">
                  <div class="alert alert-success" role="alert" style="font-size: 16px;">
                    <h4 class="alert-heading">CONGRATULATION <?php echo $row['full_name']; ?>!</h4>
                    <p>Your driving licence has been approve successfully<hr> <b>NOTE:</b> Your card is valid only for <b><?php echo $my_days ?> days </b>
                    </p><hr>
                    Pls ensure to print your ID card NOW!
                  </div>
                </div>
                  <center>
                  <div class="form-group">
                    <a href="admission.php" type="submit" name="register" class="pb-2 btn btn-warning p-2 col-sm-8 mt-1">Print Driving Licence</a>
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
