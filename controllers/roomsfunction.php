<?php include "../../models/Rooms.php"; ?>

<?php
    session_start();

    $reserve = new Rooms();
 
    $rows = $reserve->select_all_rooms();


    foreach($rows as $index => $values){
        $roomtype = $values['type'];
         //Junior Suite
        if($roomtype == "Junior Suite"){
            $juniortype = $values['type'];
            $juniorprice = $values['price'];
            $juniornumbedding = $values['numbedding'];
            $juniorbedding = $values['bedding'];
            $juniorsize = $values['size'];
            $junioraccomodates = $values['accomodates'];
            $juniormoreinfo = $values['moreinfo'];
            $junioramenities = $values['amenities'];
        }    
        //Standard Room
        if($roomtype == "Standard Room"){
            $standardtype = $values['type'];
            $standardprice = $values['price'];
            $standardnumbedding = $values['numbedding'];
            $standardbedding = $values['bedding'];
            $standardsize = $values['size'];
            $standardaccomodates = $values['accomodates'];
            $standardmoreinfo = $values['moreinfo'];
            $standardamenities = $values['amenities'];
        }
        //Superior Room
        if($roomtype == "Superior Room"){
            $superiortype = $values['type'];
            $superiorprice = $values['price'];
            $superiornumbedding = $values['numbedding'];
            $superiorbedding = $values['bedding'];
            $superiorsize = $values['size'];
            $superioraccomodates = $values['accomodates'];
            $superiormoreinfo = $values['moreinfo'];
            $superioramenities = $values['amenities'];
        }      
    }
        
	$reserve->close();


?>