<?php
include '../config/db.php';
$obj = new Operations();
$obj->Prediction();
$rows = $obj->fetch_record('science','student',$_SESSION['user']);

?>
<!DOCTYPE html>
<html>
<head>
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
<body>
<div >

<?php include('stud_nav.php'); ?>
<br><br><br><br>
<nav class="text-center navbar-dark pt-3  bg-info text-light">
  <a class="navbar-brand text-center" href="#"><b>STUDENT DASHBAORD </b></a>
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
              <div class="box-body p-3 rounded pd-20 card-box mb-30">
           <h4 class="p-3 bg-light text-success text-center rounded">PROVIDE THE NECESSARY REQUIREMENT CAREFULLY</h4>

              <table class="table table-striped table-hover table-bordered table-responsive-sm" style="font-size: 12px; color: black;">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>English sentence</th>
                    <th>Hausa Translation</th>
                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody style="color: black;">

                  <tr>
                   <?php
                    $count = 1;
                    while($row = mysqli_fetch_assoc($rows)){
                    
            ?>
                  <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $row["grade1"]; ?></td>
                    <td><?php echo $row["grade2"]; ?></td>
                    <form method="post">
                      <td><button class="btn btn-primary btn-sm" value="<?php echo $row['sen_id'] ?>" name="btn_edit" type="submit">Edit</button></td>
                      <td><button onclick="return confirm('Confirm if you want to delete this sentence')" class="btn btn-warning btn-sm" value="<?php echo $row['sen_id'] ?>" name="btn_delete" type="submit">Delete</button></td>
                    </form>
                 </tr>
                  <?php
                }
                ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</body>
</html>

<script src="jquery.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $("#name").on("change", function(){
      $(".data").hide();
      $("#" + $(this).val()).fadeIn(700);
    }).change();
  })
</script>
