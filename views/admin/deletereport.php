<?php
	include "config.php";
				
    $reportid = $_REQUEST['reportid'];

$sql = "DELETE FROM report where reportid='$reportid'";
$result = $con -> query($sql);
header("location:adminreport.php");

?>

