<?php

class user {
	protected $conn;   //connection code

	function __construct() {
		//database credentials

		$dbhost = "localhost:3306";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "hoteldb";

		$this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		if (!$this->conn) {
			echo "error";
		} 

    }  
    
    function addUser ($name, $email, $subject, $message) {

		$sql = "INSERT INTO report (name, email, subject, message)
				VALUES (\"".$name."\",\"".$email."\",\"".$subject."\",\"".$message."\")";

		$result = mysqli_query($this->conn, $sql);

		if (!$result) {
			echo("ERROR!");

		} 
	}


}




?>