<?php
include_once('../config/db.php');
$myObj = new Operations();
$datas = $myObj->fetch_user_record("student", "reg_no", $_SESSION['reg_no']);

$row = mysqli_fetch_assoc($datas);

?>
<!DOCTYPE html>
<html lang="en">

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
  <a class="navbar-brand text-center" href="#"><b>STUDENT DASHBAORD </b></a>
</nav>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
   <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container col-lg-8 p-5" style="background: lightyellow">
            <div class="text-center">
                <h2 class="text-success">   <img src="../images/logo1.png" class=" ml-2 p-2" width="100">JIGAWA STATE SCHOLARSHIP BOARD</h2>
                <b style="font-size: 15px; margin-top: -10vh;">(Scholarship Board for 2021 / 2022 Session)</b><br>
                </div>
            <hr>
            <div class="row">
                <div class="col-md-5 " style="float: left;">
                    <h6 class="text-left">Ag. Rector</h6>
                    <span><i>Dr. Kamalu Yahaya</i></span><br>
                    <i>Bsc, Msc, Phd</i>
                </div>
                <div class="col-md-3 ">
                    <img src="../images/logo1.png" class=" ml-2 p-2" width="100">
                </div>
                <div class="col ">
                    <h6 class="text-left">Registrar:</h6>
                    <span><i>Dr. Abdulsalam Abdullateef</i></span><br>
                    <i>B.A Ling. MPA, MSc, PhD, MNIM</i>
                </div>
            </div>
            <div class="alert text-center bg-success p-0 text-light">
                <b>OFFER OF SCHOLARSHIP FOR 2021/2022 SESSION</b>
            </div>

            <div class="row" style="font-size:14px">
                <div class="col-md-3"> 
                    <img src="../images/<?php echo $row['image'] ?>" class=" ml-2 p-2" style="width: 120px; height: 130px; border-radius:10px">
                </div>
                <div class="detail col-md-3"> 
                    <b>App. Number: </b><br>
                    <b>Candidate Name: </b><br>
                    <b>Nationality: </b><br>
                    <b>State of Origin: </b><br>
                    <b>L.G.A of Origin: </b><br>
                </div>
                <div class=" col-md-6"> 
                    <b><?php echo $row['reg_no'] ?>  </b><br>
                    <b><?php echo $row['last_name']." ".$row['first_name']; ?> </b><br>
                    <b>Nigeria </b><br>
                    <b><?php echo $row['state'] ?> </b><br>
                    <b><?php echo $row['lga'] ?> </b><br>
                </div>
            </div>
            <hr>
            <div class="text-center" style="font-size:15px">
            <p>
                I am pleased to inform you that you have been offered scholarship by Jigawa state Governemnt as follows
                
            </p>
            
            <hr>
            <!-- Admission footer -->
            <div class="text-center">
                <b>Signed by: 
                    <center><div class="line mt-2">
                    
                   </div></center></b> Government<br>
                <b>For Scholarship Director</b>
                <hr>
                <span>Note: Any alteration renders this offer Letter invalid.</span>
            </div><br><br>

             <a href="#" onclick="window.print()" class="btn-oulined-primary">Print</a>
        </div>

    </div><br><br><br>


    <!-- Contact End -->

</body>

</html>