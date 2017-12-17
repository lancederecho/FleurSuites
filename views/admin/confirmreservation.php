<?php
	include "config.php";
				
    $reserveid = $_REQUEST['reserveid'];
    $roomid = $_REQUEST['roomid'];

    $status="confirmed";
    $roomstatus="Taken";

$sql = "UPDATE roomreserve SET 
			   			status =\"".$status."\"
                        WHERE reserveid = \"".$reserveid."\" ";

$roomsql = "UPDATE rooms SET 
			   			status =\"".$roomstatus."\"
						WHERE roomid = \"".$roomid."\" ";

$result = $con -> query($sql);
$roomresult = $con -> query($roomsql);
header("location:adminhome.php");

?>