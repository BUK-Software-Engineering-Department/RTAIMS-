<?php 

$today  = date('Y-m-d');

$addDays = date('d-m-Y', strtotime($today.'+ 365 days'));

include 'config/db.php';
$obj = new Operations();
$obj->register();

 ?>
<!DOCTYPE html>
<html>
<title>Scholarship board</title>
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
          <div class="box-body p-3 rounded pd-20 mt-5 card-box mb-30">
            <h4 class="p-3 btn-default text-light text-center rounded"><b>APPLY YOUR DRIVING LICENCE NOW!</b></h4>

              <?php $obj->Response() ?>
              <form method="post" enctype="multipart/form-data">
                <div class="form-group row mt-5">
                   <label for="inputPassword" class="col-sm-2 col-form-label">Full name</label>

                  <div class="col-sm-4">                   
                    <input type="text" name="full_name" class=" form-control" placeholder="Full name" required>
                  </div>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-md-4">                    
                    <input type="email" name="email" class=" form-control" placeholder="Your email" required>
                  </div>
                  <br><br>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mobile number</label>
                  <div class="col-sm-4">                    
                    <input type="text" name="phone" class=" form-control" placeholder="Your mobile number">
                  </div>
                  <br><br>
                   <label for="inputPassword" class="col-sm-2 col-form-label">Gender</label>
                  <div class="col-md-4">
                  <select class="form-control " name="gender" required="">
                    <option value="">..Gender..</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>                  
                  </div>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Issueing date</label>
                  <div class="col-md-4">                    
                    <input type="text" name="issue_date" value="<?php echo Date("d-m-Y") ?>" readonly class=" form-control" required>
                  </div>
                  <br><br>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Expiring date</label>
                  <div class="col-md-4">                    
                    <input type="text" name="expire_date" class=" form-control" value="<?php echo $addDays ?>" readonly required>
                  </div>
                  <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
                  <div class="col-md-4">                    
                    <select class="form-control " name="state" required="">
                    <option value="">..Select..</option>
                    <option>ABI STATE</option>
                    <option>ADAMAWA STATE</option>
                    <option>AKWA IBOM STATE</option>
                    <option>ANAMBRA STATE</option>
                    <option>BAUCHI STATE</option>
                    <option>BAYELSA STATE</option>
                    <option>BENUE STATE</option>
                    <option>BORNO STATE</option>
                    <option>CROSS-RIVER STATE</option>
                    <option>DELTA STATE</option>
                    <option>EBOYI STATE</option>
                    <option>EDO STATE</option>
                    <option>EKITI STATE</option>
                    <option>ENUGU STATE</option>
                    <option>FCT</option>
                    <option>GOMBE STATE</option>
                    <option>IMO STATE</option>
                    <option>JIGAWA STATE</option>
                    <option>KADUNA STATE</option>
                    <option>KANO STATE</option>
                    <option>KEBBI STATE</option>
                    <option>KOGI STATE</option>
                    <option>KWARA STATE</option>
                    <option>NASARAWA STATE</option>
                    <option>NIGER STATE</option>
                    <option>OGUN STATE</option>
                    <option>ONDO STATE</option>
                    <option>OSUN STATE</option>
                    <option>RIVERS STATE</option>
                    <option>SOKOTO STATE</option>
                    <option>TARABA STATE</option>
                    <option>YOBE STATE</option>
                    <option>ZAMFARA STATE</option>
                  </select> 
                  </div>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Blood group</label>
                  <div class="col-md-4">                    
                    <select class="form-control " name="blood" required="">
                    <option value="">..Select..</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                  </select> 
                  </div>
                  <br><br>

                  <label for="inputPassword" class="col-sm-2 col-form-label">DOB</label>
                  <div class="col-sm-4">                    
                    <input type="date" name="dob" class=" form-control" placeholder="Your mobile number">
                  </div>
                  <br><br>
                   <label for="inputPassword" class="col-sm-2 col-form-label">Marital status</label>
                  <div class="col-md-4">
                  <select class="form-control " name="m_status" required="">
                    <option value="">..Gender..</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorce</option>
                    <option>Other</option>
                  </select>
                </div>
                   
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-md-6"> 
                    <input type="text" name="address" class=" form-control" placeholder="Address " required>
                  </div>
                  <div class="col-md-4"> 
                    <input type="file" name="image" class=" form-control" required>
                  </div><br><br>
                </div>
                 <center>
                  <div class="form-group">
                    <button type="submit" name="register" class="pb-2 btn btn-info p-2 col-sm-4 mt-3">APPLY NOW</button>
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
