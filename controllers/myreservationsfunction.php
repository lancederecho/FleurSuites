<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();

    $rows = $reserve->select_all_reservations();

    $roomsrows = $reserve->select_all_rooms();

    $currentid = isset($_REQUEST['id'])? $_REQUEST['id']:NULL;

    if ($rows > 0) {
        foreach($rows as $index => $values){
            $reserveid = isset($values['reserveid']);

            if($reserveid == $currentid ){
                $reserve->delete_reservation($_REQUEST['id']);
                echo "
                <script>
                    window.location.href=\"myreservations.php\";
                </script>";
            }
        }
    }
	$reserve->close();


?>