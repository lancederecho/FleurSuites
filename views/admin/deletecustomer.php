<?php
	include "config.php";
				
    $userid = $_REQUEST['userid'];

$sql = "DELETE FROM user where userid='$userid'";
$result = $con -> query($sql);
header("location:admincustomer.php");

?>

