<?php
	include "config.php";
				
	$reserveid = $_REQUEST['reserveid'];
	$userid = NULL;
	$adminid = NULL;
    $roomid = $_REQUEST['roomid'];

$sql = "DELETE FROM roomreserve where reserveid='$reserveid'";

$roomstatus="Free";

$roomsql = "UPDATE rooms SET 
						   status =\"".$roomstatus."\",
						   userid=\"".$userid."\",
						   adminid=\"".$userid."\"
						WHERE roomid = \"".$roomid."\" ";


$result = $con -> query($sql);
$roomresult = $con -> query($roomsql);


header("location:adminconfirmreservation.php");

?>