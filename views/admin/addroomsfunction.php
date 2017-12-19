<?php include "../../models/Rooms.php"; ?>

<?php
    //numrooms
    $numrooms = isset($_REQUEST['numrooms'])? $_REQUEST["numrooms"]:NULL;
	$users = new Rooms();
 
	if(isset($_REQUEST['juniorsuite']) && $_REQUEST['juniorsuite']=="Junior Suite"){
        $type = "Junior Suite";
        $price = "3000";
        $numbedding = "2";
        $bedding = "Double";
        $size = "260 sq ft";
        $accomodates = "2";
        $moreinfo = "Affordable luxury. Our Junior Suites are the perfect option if you are looking for a little extra luxury. With an open 400 square foot floor plan, the Junior Suites offer the extra space you need to spread out and enjoy the breathtaking views of the city skyline.";
        $amenities = "A/C,TV,Minibar,Telephone,Kitchen,Wifi,Safe,Towels";

        if (isset($_REQUEST['numrooms'])) {
            for ($i=0; $i<$numrooms; $i++) {
                $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
            }
        } else {
            $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
        }

		if($result){
                    echo "
                    <script>
                        window.location.href=\"adminroom.php\";
                    </script>";
		}
    }
    
    if(isset($_REQUEST['standardroom']) && $_REQUEST['standardroom']=="Standard Room"){
        $type = "Standard Room";
        $price = "2000";
        $numbedding = "1";
        $bedding = "Double";
        $size = "230 sq ft";
        $accomodates = "1";
        $moreinfo = "Functional and comfortable. Sit back and enjoy one of our brand new 280 square foot Standard Rooms. Complete with courtyard views, stylish decor and natural light, our Standard Rooms are the perfect combination of function and comfort. Ideally suited for today's business or leisure travelers.";
        $amenities = "A/C,TV,Minibar,Telephone,Kitchen,Wifi,Safe";

        if (isset($_REQUEST['numrooms'])) {
            for ($i=0; $i<$numrooms; $i++) {
                $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
            }
        } else {
            $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
        }

		if($result){
                    echo "
                    <script>
                        window.location.href=\"adminroom.php\";
                    </script>";
		}
    }
    
    if(isset($_REQUEST['superiorroom']) && $_REQUEST['superiorroom']=="Superior Room"){
        $type = "Superior Room";
        $price = "5000";
        $numbedding = "1";
        $bedding = "King";
        $size = "280 sq ft";
        $accomodates = "4";
        $moreinfo = "Elegant simplicity. Our Superior Rooms give you the space and privacy you need to work or play on the road. The spacious 380 square foot rooms include an intimate lounge area, business workstation and views of the courtyard. Complete with all the regular amenities, our Superior Rooms also include a daily newspaper and water bottles.";
        $amenities = "A/C,TV,Minibar,Telephone,Kitchen,Wifi,Safe,Shower,Bath,Workspace,Towels";

        if (isset($_REQUEST['numrooms'])) {
            for ($i=0; $i<$numrooms; $i++) {
                $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
            }
        } else {
            $result = $users->insert_room($type, $price, $numbedding, $bedding, 
                    $size, $accomodates, $moreinfo, $amenities);
        }

		if($result){
                    echo "
                    <script>
                        window.location.href=\"adminroom.php\";
                    </script>";
		}
	}

	$users->close();
?>