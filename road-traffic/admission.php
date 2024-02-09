<?php
include_once('config/db.php');
$myObj = new Operations();
$datas = $myObj->fetch_user_record("driver", "reg_no", $_SESSION['reg_no']);

$row = mysqli_fetch_assoc($datas);

?>
<!DOCTYPE html>
<html lang="en">

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
   <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container col-lg-5 p-2 border roundd" style="background: lightyellow; margin-top: 20vh;">
            <div class="row">
                <div class="col-md-2 ml-3">
                    <img src="images/map-logo.png" class="" width="100">
                </div>
              <div class="col-md-9">
                <h5 class="text-success">   FEDERAL REPUBLIC OF NIGERIA</h5>
                <b style="font-size: 15px;">NATIONAL DRIVER'S LICENCE</b><br>
            </div>
            <div class="col-md-12" style="margin-top: -3vh;">
                 <div class="alert text-right">
                <b><?php echo $row['state'] ?></b>
            </div>
            <div class="col-md-12" style="margin-top: -3vh;">
                 <div class="alert text-center bg-primary p-0 text-light">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <b>L/NO <?php echo $row['reg_no'] ?></b>
                    </div>
                    <div class="col-md-6 text-right">
                        <b>Date applied <?php echo $row['dates'] ?></b>
                    </div>
                </div>
            </div>
            </div>
            <hr>
            <div class="row" style="font-size:14px">
                <div class="col-md-3"> 
                    <img src="images/<?php echo $row['image'] ?>" class=" ml-2 p-2" style="width: 150px; height: 180px; border-radius:10px">
                </div>
                <div class="detail col-md-4"> 
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">Date of B. </b><?php echo $row['dob'] ?>  </h5>
                    <h5 class=""><?php echo $row['full_name'] ?>  </h5>
                    <b><?php echo $row['address']; ?> </b><br>
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">Sex </b><?php echo $row['gender'] ?>  </h5>
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">BG </b> <?php echo $row['blood'] ?>  </h5>
                </div>
                <div class="detail col-md-4"> 
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">Issue: </b><?php echo $row['issue_date'] ?>  </h5>
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">Sex </b><?php echo $row['expire_date'] ?>  </h5>
                    <h5 class="text-danger"><b style="font-size:13px;" class="text-info">N of K </b> <?php echo $row['phone'] ?>  </h5>
                    <b>Date of B. </b><br>
                     <img src="images/sign.png" width="150">
                <b>Signature</b>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="col text-center">
             <a href="#" onclick="window.print()">Print ID Card</a>
            </div>
            <div class="text-center" style="font-size:15px">
            <!-- Admission footer -->
        </div>

    </div><br><br><br>


    <!-- Contact End -->

</body>

</html>