<?php
    include "config.php";
    
    session_start();
				
    $reserveid = $_REQUEST['reserveid'];
    $roomid = $_REQUEST['roomid'];
    $adminid = $_SESSION['adminid'];
    $userid = $_REQUEST['userid'];

    $status="confirmed";
    $roomstatus="Taken";

$sql = "UPDATE roomreserve SET 
                           status =\"".$status."\",
                           adminid =\"".$adminid."\"
                        WHERE reserveid = \"".$reserveid."\" ";

$roomsql = "UPDATE rooms SET 
                           status =\"".$roomstatus."\", 
                           adminid =\"".$adminid."\", 
                           userid =\"".$userid."\" 
                        WHERE roomid = \"".$roomid."\" ";

$historyreserveid = $_SESSION['historyreserveid'];
$historydateconfirmed = date("Y-m-d");
$historydatereserved = $_SESSION['historydatereserved'];
$historychecktime = $_SESSION['historychecktime'];
$historycheckin = $_SESSION['historycheckin'];
$historycheckout = $_SESSION['historycheckout'];
$historynumofdays =$_SESSION['historynumofdays'];
$historyroomid = $_SESSION['historyroomid'];
$historyuserid = $_SESSION['historyuserid'];
$hitoryadminid = $adminid;
                        
$query = "INSERT INTO history (reserveid, dateconfirmed, datereserved, checktime, checkin, checkout, numofdays, roomid, 
                userid, adminid)
				VALUES (\"".$historyreserveid."\",\"".$historydateconfirmed."\",\"".$historydatereserved."\", \"".$historychecktime."\", \"".$historycheckin."\", \"".$historycheckout."\", 
                    \"".$historynumofdays."\", \"".$historyroomid."\", \"".$historyuserid."\", \"".$hitoryadminid."\")";
                    
echo "
    <script>
        window.alert($adminid);
    </script>";

$result = $con -> query($sql);
$roomresult = $con -> query($roomsql);
$historyresult = $con -> query($query);
header("location:adminhome.php");

?>