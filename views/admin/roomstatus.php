<?php
	include "config.php";
				
    $roomid = $_REQUEST['roomid'];

    $status="Taken";
    echo"
        helloo
    ";

$sql = "UPDATE rooms SET 
			   			status =\"".$status."\"
						WHERE roomid = \"".$roomid."\" ";

$result = $con -> query($sql);
header("location:adminhome.php");

?>