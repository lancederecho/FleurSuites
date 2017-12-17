<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();

    $rows = $reserve->select_all_reservations();

    $userrows = $reserve->select_all_user();

    $historyrows = $reserve->select_all_history();

    if(isset($_REQUEST['reserveyourroombutton']) && $_REQUEST['reserveyourroombutton'] == "Reserve Your Room"){
            $result = $reserve->insert_roomreservation($datereserved, $checkin, $checkout, $numofdays, $roomid, 
                    $userid);
            if($result){
                //Unsettting room sessions
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
            }
            
            $_REQUEST['reserveyourroombutton'] = null;
	} else {
    
    }

	$reserve->close();

?>