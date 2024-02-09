<?php
session_start();
require_once('functions.php');

class Database{
	public $conn;

	public function __construct()
	{
		$this->db_config();
	}

	public function db_config(){

		$this->conn = mysqli_connect("localhost", "root", "", "road_traffic");
		if (mysqli_connect_error()) {
			die("Failed to connect database");
		}
	}

	public function validate($a)
	{
		$check = mysqli_real_escape_string($this->conn, $a);
		return $check;
	}
}
?>