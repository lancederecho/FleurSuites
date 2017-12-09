<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();

    $rows = $reserve->select_all_reservations();

    $roomsrows = $reserve->select_all_rooms();
        
	$reserve->close();


?>