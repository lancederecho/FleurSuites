<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();

    $rows = $reserve->select_all_reservations();

    $userrows = $reserve->select_all_user();

    $historyrows = $reserve->select_all_history();
    
	$reserve->close();

?>