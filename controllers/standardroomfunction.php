<?php include "../../models/Rooms.php"; ?>

<?php

/*     $type;
    $price;
    $numbedding;
    $bedding;
    $size;
    $accomodates;
    $moreinfo;
    $amenities; */

    $rooms = new Rooms();
 
    $rows = $rooms->select_all_rooms();

    $count = 0;

    foreach($rows as $index => $values){
        $roomtype = $values['type'];
        $status = $values['status'];
 
        if($roomtype == "Standard Room" && $status == "Free"){
            if($count == 0) {
                $id = $values['roomid'];
                $count++;
            }    
            $type = $values['type'];
            $price = $values['price'];
            $numbedding = $values['numbedding'];
            $bedding = $values['bedding'];
            $size = $values['size'];
            $accomodates = $values['accomodates'];
            $moreinfo = $values['moreinfo'];
            $amenities = $values['amenities'];
        } else if ($roomtype == "Standard Room" && $status == "Taken") {
            $id = $values['roomid'];
            $type = $values['type'];
            $price = $values['price'];
            $numbedding = $values['numbedding'];
            $bedding = $values['bedding'];
            $size = $values['size'];
            $accomodates = $values['accomodates'];
            $moreinfo = $values['moreinfo'];
            $amenities = $values['amenities'];
            $status = $values['status'];
        }      
    }

    $_SESSION['id'] = $id;
    $_SESSION['type'] = $type;
    $_SESSION['price'] = $price;
    $_SESSION['numbedding'] = $numbedding;
    $_SESSION['bedding'] = $bedding;
    $_SESSION['size'] = $size;
    $_SESSION['accomodates'] = $accomodates;
    $_SESSION['moreinfo'] = $moreinfo;
    $_SESSION['amenities'] = $amenities;
    $_SESSION['status'] = $status;
        
	$rooms->close();


?>