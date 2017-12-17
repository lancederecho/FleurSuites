<?php
	include "config.php";
				
    $reserveid = $_REQUEST['reserveid'];

$sql = "DELETE FROM roomreserve where reserveid='$reserveid'";
$result = $con -> query($sql);
header("location:adminhome.php");

?>