<?php
	class DBConnection {
		protected $conn;

		function __construct() {	
			
			$dbname = "hoteldb";
			$server = "localhost";
			$dbuser = "root";
			$dbpass = "";

			$this->conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);
			
			if(!$this->conn) {
				echo "<strong> ERROR </string>".mysql_error($this->conn);
			}
		
		}

		function close() {
			mysqli_close($this->conn);
		}

	}
	
?>