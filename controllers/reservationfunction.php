<?php include "../models/Rooms.1.php"; ?>

<?php

    session_start();

    echo "
        <html>
            <title>Register || Fleur Suites</title>
            <head><link rel='shortcut icon' href='../images/title.ico'></head> 
        </html>
    ";

    //datereserved
    $datereserved = date("Y-m-d");
    //check time
    $checktime = isset($_SESSION['time'])? $_SESSION["time"]:NULL;
    //checkin date
    $checkin = isset($_SESSION['checkin'])? $_SESSION["checkin"]:NULL;
    //checkout date
    $checkout = isset($_SESSION['checkout'])? $_SESSION["checkout"]:NULL;
    //num of days
    $numofdays = isset($_SESSION['numofdays'])? $_SESSION["numofdays"]:NULL;
    //room id
    $roomid = isset($_SESSION['id'])? $_SESSION["id"]:NULL;
    //user id
    $userid = isset($_SESSION['userid'])? $_SESSION["userid"]:NULL;
    //admin

	$reserve = new Rooms1();
 
	if(isset($_REQUEST['reserveyourroombutton']) && $_REQUEST['reserveyourroombutton'] == "Reserve Your Room"){
        $result = $reserve->insert_roomreservation($checktime, $datereserved, $checkin, $checkout, $numofdays, $roomid, 
                $userid);
		if($result){
            //Unsettting room sessions
            unset($_SESSION['time']);
            unset($_SESSION['checkin']);
            unset($_SESSION['checkout']);
            unset($_SESSION['numofdays']);
            unset($_SESSION['datereserved']);
            unset($_SESSION['id']);
            unset($_SESSION['type']);
            unset($_SESSION['price']);
            unset($_SESSION['numbedding']);
            unset($_SESSION['bedding']);
            unset($_SESSION['size']);
            unset($_SESSION['accomodates']);
            unset($_SESSION['moreinfo']);
            unset($_SESSION['amenities']);
            echo "
            <script>
                window.alert('Your Reservation application has been sent');
            </script>";
            echo "
            <script>
                window.location.href=\"../views/rooms/rooms.php\";
            </script>";
        }
        
        $_REQUEST['reserveyourroombutton'] = null;
	} else {
    
    }

	$reserve->close();

?>