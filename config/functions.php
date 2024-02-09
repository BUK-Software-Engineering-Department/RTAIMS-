<?php 

require_once('db.php');
$db = new Database();

class Operations extends Database
{

	public function register()
	{
		global $db;

		if (isset($_POST['register'])) {
			# code.
			$full_name = $db->validate($_POST['full_name']);
			$email = $db->validate($_POST['email']);
			$issue_date = $db->validate($_POST['issue_date']);
			$expire_date = $db->validate($_POST['expire_date']);
			$gender = $db->validate($_POST['gender']);
			$address = $db->validate($_POST['address']);
			$dob = $db->validate($_POST['dob']);
			$phone = $db->validate($_POST['phone']);
			$state = $db->validate($_POST['state']);
			$blood = $db->validate($_POST['blood']);
			$m_status = $db->validate($_POST['m_status']);

			$_SESSION['name'] = $db->validate($_POST['full_name']);



			$reg_no = rand() * 2;
			$new_reg = "FRSC/20/".$reg_no;


			move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);      
            $image=$_FILES["image"]["name"];

            if ($this->validate_mobile('driver', $phone)) {
            	// code...
            	$this->set_msg('<div class="alert alert-warning text-center">Already Applied, Kindly Login </div>"');
            }else{

			if ($this->store_record($full_name, $phone, $issue_date, $expire_date, $email, $gender, $state, $blood, $dob, $m_status, $address, $image, $new_reg)) {
				mysqli_query($this->conn, "UPDATE student SET reg_no='$new_reg' WHERE phone='$phone'");

				$sql = mysqli_query($this->conn, "SELECT * FROM driver WHERE phone='$phone' ");
				$row = mysqli_fetch_array($sql);
				$_SESSION['my_reg_no'] = $row['reg_no'];


				$this->set_msg('<div class="alert alert-success text-center "> Your Application was sent Successfully</div>');
				?><script>
										
					setTimeout(()=> window.location.href="success.php", 2000);

				</script><?php

			}else{
				$this->set_msg('<div class="alert alert-warning text-center">Failed to Apply</div>"');

			}
		}
	}
}
	public function store_record($full_name, $phone, $issue_date, $expire_date, $email, $gender, $state, $blood, $dob, $m_status, $address, $image, $new_reg){

	$sql = mysqli_query($this->conn, "INSERT INTO driver(full_name, phone, issue_date, expire_date, email, gender, state, blood, dob, m_status, address, image, reg_no, status) VALUES('$full_name', '$phone', '$issue_date', '$expire_date', '$email', '$gender', '$state', '$blood', '$dob', '$m_status', '$address', '$image', '$new_reg', 'pending')");
	if ($sql) {
		# code...
		return true;
	}else{
		return false;
	}
}




public function save_accident()
{
	global $db;

	if (isset($_POST['save'])) {
		# code.
		$vehicle_name = $db->validate($_POST['vehicle_name']);
		$color = $db->validate($_POST['color']);
		$accident_date = $db->validate($_POST['accident_date']);
		$accident_time = $db->validate($_POST['accident_time']);
		$license = $db->validate($_POST['license']);
		$vins = $db->validate($_POST['vins']);
		$party_name = $db->validate($_POST['party_name']);
		$contact_info = $db->validate($_POST['contact_info']);
		$location = $db->validate($_POST['location']);
		$injuries = $db->validate($_POST['injuries']);
		$description = $db->validate($_POST['description']);

		// $_SESSION['name'] = $db->validate($_POST['full_name']);



		$reg_no = rand() * 2;
		$new_reg = "FRSC/23/".$reg_no;


		move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);      
        $image=$_FILES["image"]["name"];

		if ($this->accident_query($vehicle_name, $color, $vins, $license, $party_name, $contact_info, $injuries, $image, $location, $accident_date, $accident_time, $description, $new_reg)) {
			// mysqli_query($this->conn, "UPDATE student SET reg_no='$new_reg' WHERE phone='$phone'");

			// $sql = mysqli_query($this->conn, "SELECT * FROM driver WHERE phone='$phone' ");
			// $row = mysqli_fetch_array($sql);
			// $_SESSION['my_reg_no'] = $row['reg_no'];


			$this->set_msg('<div class="alert alert-success text-center ">Traffic Accident record has been save successful</div>');
			?><script>
									
				setTimeout(()=> window.location.href="index.php", 2000);

			</script><?php

		}else{
			$this->set_msg('<div class="alert alert-warning text-center">Failed to Apply</div>"');

		}
	}
}
public function accident_query($vehicle_name, $color, $vins, $license, $party_name, $contact_info, $injuries, $image, $location, $accident_date, $accident_time, $description, $new_reg){

	$sql = mysqli_query($this->conn, "INSERT INTO accident(vehicle_name, color, vins, license, party_name, contact_info, injuries, image, location, accident_date, accident_time, description,case_id) VALUES('$vehicle_name', '$color', '$vins', '$license', '$party_name', '$contact_info', '$injuries', '$image', '$location','$accident_date', '$accident_time', '$description', '$new_reg')");
	if ($sql) {
		# code...
		return true;
	}else{
		return false;
	}
}


//Validate if mobile number is already exit in the database

public function validate_mobile($a, $b){

	global $dbObj;

	$sql1 = mysqli_query($this->conn, "SELECT * FROM $a WHERE phone='$b'");
	if (mysqli_num_rows($sql1)>0) {
		// $row = mysqli_fetch_array($sql1);

		return true;
	}else{
		return false;
	}
}


public function fetch_record($a, $b, $c)
{
	$sql = "SELECT * FROM admin WHERE $b='$c'";
	$result = mysqli_query($this->conn, $sql);
	
	return $result;
}

public function fetch($db)
{
	$sql = "SELECT * FROM $db ";
	$result = mysqli_query($this->conn, $sql);
	
	return $result;
}

public function Login($a)
{
	global $db;

	if (isset($_POST['login'])) {
		$username = $db->validate($_POST['username']);
		$password = $db->validate($_POST['password']);

		if ($this->admin_login($a, $username, $password)) {

			

			$this->set_msg('<div class="alert alert-success text-center ">Login Successfully</div>');
			?><script>
									
				setTimeout(()=> window.location.href="admin/index.php",3000);

			</script><?php
		}else{

			$this->set_msg('<div class="alert alert-warning text-center" id="msg">Invalid login credentials</div>');

			?>
			<script>
									
				setTimeout(()=> document.getElementById('msg').style.display="none", 3000);

			</script>
		<?php

			

		}
	}
}

public function get_ID(){

	global $db;

	if (isset($_POST['check'])) {

		$reg_no = $db->validate($_POST['reg_no']);
		$_SESSION['reg_no'] = $db->validate($_POST['reg_no']);
		// $password = $dbObj->validate($_POST['rpassword']);

		$sql = mysqli_query($db->conn,"SELECT * FROM driver WHERE reg_no='$reg_no' AND status='approve'");
		if(mysqli_num_rows($sql)>0){
			$row = mysqli_fetch_array($sql);

			header('location:success-status.php');
		}else{
			header('location:wrong-status.php');
		}

    }

}

public function fetch_user_record($a,$b,$c){

	global $db;

	$sql = "SELECT * FROM $a WHERE $b='$c'";
	$result = mysqli_query($db->conn, $sql);

	return $result;
}


public function retrive()
{
	global $db;

	if (isset($_POST['login'])) {
		$username = $db->validate($_POST['email']);
		$password = $db->validate($_POST['phone']);
		

		if ($this->retrive_query($username, $password)) {
		$_SESSION['phone'] = $db->validate($_POST['phone']);				

			// $this->set_msg('<div class="alert alert-success text-center animated shake">Incorrect Details, Pls try again Later</div>');
			header("location:view.php");

		}else{

			
			$this->set_msg('<div class="alert alert-warning text-center animated shake">Incorrect Details, Pls try again Later</div>');

			?>
			<script>
									
				setTimeout(()=> document.getElementById('msg').style.display="none", 3000);

			</script>
		<?php

			

		}
	}
}

public function add_admin(){

	global $db;

	if (isset($_POST['admin'])) {

		$first_name = $db->validate($_POST['first_name']);
		$last_name = $db->validate($_POST['last_name']);
		$username = $db->validate($_POST['username']);
		$password = $db->validate($_POST['password']);

		if ($this->admin_query($first_name, $last_name, $username, $password)) {

			$this->set_msg('<div class="alert alert-success text-center" id="msg">Record added successful</div>');
            	?>
            	<script type="text/javascript">
            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
            	</script>

            	<?php
            }else{

            	$this->set_msg('<div class="alert alert-danger text-center" id="msg">Failed to add record</div>');
            	?>
            	<script type="text/javascript">
            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
            	</script>
            	<?php

            }
	}
}

function admin_query($a, $b, $c, $d){

	$sql = "INSERT INTO admin(first_name, last_name, username, password)VALUES('$a', '$b', '$c', '$d')";
	$result = mysqli_query($this->conn, $sql);

	if ($result) {
	    return true;
	}else{
		return false;
	}
}


public function approved($a, $b){
	global $db;

	if (isset($_POST['approve'])) {

		$id= $db->validate($_POST['approve']);

		$sql = "UPDATE accident SET $a='$b' WHERE accident_id='$id'";
			$result = mysqli_query($this->conn, $sql);

			if ($result) {
				$this->set_msg('<div class="alert alert-success text-center wow fadeInUp" id="msg" >Case Resolved successful</div>');
			?><script type="text/javascript">
	            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
	            	</script><?php
				return true;
			}else{
				$this->set_msg('<div class="alert alert-danger text-center wow fadeInUp" id="msg" >Failed to approve</div>');
				return false;
			}
		}
		// code...
	}

public function change_password(){

	global $db;

	if (isset($_POST['change'])) {
		$old = $db->validate($_POST['old']);
		$new = $db->validate($_POST['new']);
		$confirm = $db->validate($_POST['confirm']);
		

        if ($old==$_SESSION['pass']) {

        	if ($new==$confirm) {
        	   if ($this->password_query($new, $_SESSION['user'])) {
        	
            	$this->set_msg('<div class="alert alert-success text-center" id="msg">Password Change Successful</div>');
            	?>
            	<script type="text/javascript">
            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
            	</script>

            	<?php }

	            }else{
	            	$this->set_msg('<div class="alert alert-warning text-center" id="msg">Password Must match!</div>');
	            	?>
	            	<script type="text/javascript">
	            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
	            	</script>

	            	<?php 

	            }
	        }else{

	        	$this->set_msg('<div class="alert alert-warning text-center" id="msg">Incorrect Old Password!</div>');
	            	?>
	            	<script type="text/javascript">
	            		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
	            	</script>

	            	<?php 
	            }

        }
    }

	


public function password_query($a, $b){

	$sql = "UPDATE admin SET password='$a' WHERE id='$b'";
	$result = mysqli_query($this->conn, $sql);

	if ($result) {
		return true;
	}else{
		return false;
	}
}

public function record_c($db_name, $id){

	global $db;

    $sql = "SELECT count($id) AS value_sum FROM $db_name ";
    $result = mysqli_query($db->conn, $sql);
   
    return $result;
	
}

public function delete_record($db_name, $field){

	global $db;

	if (isset($_POST['btn_delete'])) {

		$id = $db->validate($_POST['btn_delete']);

		if ($this->delete_query($db_name, $field, $id)) {

			$this->set_msg('<div class="alert alert-success text-center" id="msg">Sentence deleted successful</div>');
        	?>
        	<script type="text/javascript">
        		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
        	</script>

        	<?php
        }else{

        	$this->set_msg('<div class="alert alert-danger text-center" id="msg">Failed to delete record</div>');
        	?>
        	<script type="text/javascript">
        		setTimeout(() => document.getElementById('msg').style.display="none", 4000);
        	</script>
        	<?php


		}
		
		//$_SESSION['btn_delete'] = $dbObj->validate($_POST['btntb'])
	}
}

public function delete_query($db_name, $field, $where_clause){

	$sql = "DELETE FROM $db_name WHERE $field='$where_clause'";
	$result = mysqli_query($this->conn, $sql);
	if ($result) {
		return true;
	}else{
		return false;
	}
}


protected function retrive_query($b, $c)
{
	global $db;
	$sql = mysqli_query($db->conn,"SELECT * FROM driver WHERE email='$b' AND phone='$c'");
	if(mysqli_num_rows($sql)>0){
		// $row = mysqli_fetch_array($sql);

		// $_SESSION['user'] = $row['id'];
		// $_SESSION['pass'] = $row['password'];

		return true;
	}else{
		return false;
	}
}

protected function admin_login($a, $b, $c)
{
	global $db;
	$sql = mysqli_query($db->conn,"SELECT * FROM $a WHERE username='$b' AND password='$c'");
	if(mysqli_num_rows($sql)>0){
		$row = mysqli_fetch_array($sql);

		$_SESSION['user'] = $row['id'];
		$_SESSION['pass'] = $row['password'];

		return true;
	}else{
		return false;
	}
}

public function login_access(){
	if (!isset($_SESSION['user'])) {

		header('location:../index.php');
	}
}

public function set_msg($msg)
{
	if (!empty($msg)) {
		
		$_SESSION['msg'] = $msg;
	}else{
		$msg ="";
	}
}

public function response()
{
	if (isset($_SESSION['msg'])) {
		
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
}
}