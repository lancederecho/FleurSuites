<?php
	include "config.php";
				
    $roomid = $_REQUEST['roomid'];

$sql = "DELETE FROM rooms where roomid='$roomid'";



$result = $con -> query($sql);



header("location:adminroom.php");

?>