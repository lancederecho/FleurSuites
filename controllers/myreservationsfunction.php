<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();

    $rows = $reserve->select_all_reservations();

    $roomsrows = $reserve->select_all_rooms();

    $currentid = isset($_REQUEST['reserveid'])? $_REQUEST['reserveid']:NULL;
    $currentroomsid = isset($_REQUEST['roomid'])? $_REQUEST['roomid']:NULL;
    $userid = 0;
    $adminid = 0;
    $status = "Free";

	if(isset($_REQUEST['cancel']) && $_REQUEST['cancel']=="Cancel"){
        if ($rows > 0) {
            foreach($rows as $index => $values){
                $reserveid = isset($values['reserveid']);
                if($reserveid == $currentid ){
                    $reserve->delete_reservation($_REQUEST['reserveid']);
                    echo "
                    <script>
                        window.location.href=\"myreservations.php\";
                    </script>";
                }
            }
        }
		if($result){

		}
    }
    
    if(isset($_REQUEST['checkout']) && $_REQUEST['checkout']=="Checkout"){
        if ($roomsrows > 0) {
            foreach($roomsrows as $roomsindex => $roomsvalues){
                $roomsid = isset($roomsvalues['roomid']);

                if($roomsid == $currentroomsid ){
                    echo "
                    <script>
                        window.alert('yeah');
                    </script>";
                    $reserve->update_roomstatus($_REQUEST['roomid'], $userid, $adminid, $status);
                    echo "
                    <script>
                        window.location.href=\"myreservations.php\";
                    </script>";
                }
            }
        }
        if ($rows > 0) {
            foreach($rows as $index => $values){
                $reserveid = isset($values['reserveid']);
                if($reserveid == $currentid ){
                    $reserve->delete_reservation($_REQUEST['reserveid']);
                    echo "
                    <script>
                        window.location.href=\"myreservations.php\";
                    </script>";
                }
            }
        }
		if($result){

		}
	}

/*     if ($roomsrows > 0) {
        foreach($roomsrows as $index => $values){
            $roomsid = isset($values['roomid']);

            if($roomsid == $currentroomsid ){
                $reserve->update_rooms($_REQUEST['id']);
                echo "
                <script>
                    window.location.href=\"myreservations.php\";
                </script>";
            }
        }
    } */

	$reserve->close();


?>