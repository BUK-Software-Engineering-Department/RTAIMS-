<?php 

include '../config/db.php';
$obj = new Operations();
$obj->login_access();
$obj->save_accident();

 ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
</head>
<body>

    <?php 
     include("stud_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  
    <!-- Main content -->
     <div class="container col-md-8 " style="margin-top: 20vh;">
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-body p-3 rounded pd-20 mt-5 card-box mb-30">
            <h4 class="p-3 bg-light text-success text-center rounded">DOCUMENT NEW INFRACTION</h4>

              <?php $obj->Response() ?>
              <form method="post">
                <div class="form-group row mt-5">
                   
                  <label for="inputPassword" class="col-sm-2 col-form-label">Vehicle Information</label>
                  <div class="col-md-2"> 
                    <input type="text" name="vehicle_name" class="form-control-sm form-control" placeholder="Vehicle name " required>
                  </div><br><br>
                  <div class="col-md-2"> 
                    <select name="color" class="form-control-sm form-control" required>
                      <option value="">Select car color</option>
                      <option>Red</option>
                        <option>Black</option>
                        <option>White</option>
                        <option>Silver</option>
                        <option>Gray</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Brown</option>
                        <option>Yellow</option>
                        <option>Orange</option>
                        <option>Purple</option>
                        <option>Pink</option>
                        <option>Beige</option>
                        <option>Gold</option>
                        <option>Bronze</option>
                        <option>Burgundy</option>
                        <option>Navy</option>
                        <option>Charcoal</option>
                        <option>Teal</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"> 
                    <input type="text" name="vins" class="form-control-sm form-control" placeholder="vehicle identification numbers (VINs " required>
                  </div><br><br>
                  <div class="col-md-2"> 
                    <input type="text" name="license" class="form-control-sm form-control" placeholder="License plate no " required>
                  </div><br><br>


                  <label for="inputPassword" class="col-sm-2 col-form-label">Parties Involved</label>
                  <div class="col-md-4"> 
                    <input type="text" name="party_name" class="form-control-sm form-control" placeholder="Names " required>
                  </div><br><br>
                  <div class="col-md-6"> 
                    <input type="text" name="contact_info" class="form-control-sm form-control" placeholder="Contant Information" required>
                  </div><br><br>


                  <label for="inputPassword" class="col-sm-2 col-form-label"> __________________________________________________________________________________________________________________________________________________</label>
                  <div class="col-md-10"> 
                    <!-- <textarea class="form-control form-control" name="injuries" required></textarea> -->
                    <small hidden=""><i>Document any injuries sustained by individuals involved in the accident, including drivers, passengers, and pedestrians. Also, note any damages to vehicles or property.</i></small>
                    <!-- <input type="text" name="old" class="form-control-sm form-control" placeholder="Names " required> -->
                  </div><br><br>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Photos or Videos</label>
                  <div class="col-md-4"> 
                    <input type="file" name="image" class="form-control-sm form-control"  required>
                  </div><br><br>

                  <!-- <label for="inputPassword" class="col-sm-2 col-form-label">Location</label> -->
                  <div class="col-md-2"> 
                    <input type="text" name="location" class="form-control-sm form-control" placeholder="Location" required>
                  </div><br><br>
                  <div class="col-md-2"> 
                    <input type="date" name="accident_date" class="form-control-sm form-control" required>
                  </div><br><br>
                  <div class="col-md-2"> 
                    <input type="time" name="accident_time" class="form-control-sm form-control" required>
                  </div><br><br>

                  <label for="inputPassword" class="col-sm-2 col-form-label">Accident Description</label>
                  <div class="col-md-10"> 
                    <textarea class="form-control form-control" name="description" required></textarea>
                    <small><i>Write a detailed narrative of how the accident unfolded. Include factors such as weather conditions, road conditions, and any other relevant details leading up to the collision.</i></small>
                    <!-- <input type="text" name="old" class="form-control-sm form-control" placeholder="Names " required> -->
                  </div><br><br>
                  
                 </div>
                 <center>
                  <div class="form-group">
                    <button type="submit" name="save" class="pb-2 btn btn-info p-2 col-sm-4 mt-3">Save record</button>
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
