<?php include "../../controllers/myreservationsfunction.php"; ?>

<?php
    if ($_SESSION && isset($_SESSION['userfirstname'])) {
        ?>
            <html>
                <link rel="shortcut icon" href="../images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="myreservations"><a href="../transaction/myreservations.php">My Reservations</a></li>
                                <li class="userprofile"><a href="../../controllers/logoutfunction.php">
                                    <?php
                                        echo $_SESSION['userfirstname'];
                                    ?>
                                </a></li>
                                <li class="logout"><a href="../../controllers/logoutfunction.php">Logout</a></li>
                            </ul>
                        </nav>
                        <nav class="navbar">
                            <ul>
                                <li class="home"><a href="../index.php">Home</a></li>
                                <li class="rooms"><a href="../rooms/rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="../contactus.php">Contact Us</a></li>
                                <li class="aboutus"><a href="../aboutus.php">About Us</a></li>
                                <li class="policy"><a href="../policy.php">Policy</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="../index.php">
                            <img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>   
            </html>
        <?php
    } else {
        echo "
        <script>
            window.alert('Login to continue!');
            window.location.href=\"../account/login.php\";
        </script>";
    }
?>

<html>
    <head>
        <title>My Reservations || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/myreservationstyle.css">
    </head>

    <body>
        <div class="backgroundrmyreservations">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="myreservationsstatement">
            <p align="center" class="myreservationsstatement">MY RESERVATIONS</p>
        </div>

        <div class="myreservationsbody">
            <div class="myreservationstablebody">
                <div class="myreservationstable">
                    <table class="myreservationstable">
                        <thead>
                            <tr>
                                <th>Room Type</th>
                                <th>Bedding</th>
                                <th>Size</th>
                                <th>Date Reserved</th>
                                <th>Check-in Date</th>
                                <th>Check-out Date</th>
                                <th>Number of Days</th>
                                <th>Status</th>
                                <th class="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                            $count = 0;
                            if ($rows > 0) {
                                foreach($rows as $index => $values){
                                    $userid = $values['userid'];
                                    $reserveid = $values['reserveid'];
                                    $roomsid = $values['roomid'];
    
                                    if($userid == $_SESSION['userid']){
                                        foreach($roomsrows as $roomsindex => $roomsvalues){
                                            $roomid = $roomsvalues['roomid'];
            
                                            if($roomid == $values['roomid']){
                                                if($count == 0) {
                                                echo"<tr>
                                                    <td>".$roomsvalues['type']."</td>
                                                    <td>".$roomsvalues['numbedding']." ".$roomsvalues['bedding']."(s)</td>
                                                    <td>".$roomsvalues['size']."</td>
                                                    ";
                                                }    
                                            }
                                        }
                                        echo"
                                            <td>".$values['datereserved']."</td>
                                            <td>".$values['checkin']."</td>
                                            <td>".$values['checkout']."</td>
                                            <td>".$values['numofdays']."</td>
                                            <td>".$values['status']."</td>
                                            ";
                                        if($values['status'] == "pending") {
                                            echo"
                                                <td class='action'>
                                                    <form action='?delete=yes & reserveid=$reserveid & roomid=$roomsid' method='POST'>
                                                        <input type='submit' value='Cancel' class='cancel' name='cancel'>
                                                    </form>
                                                </td>
                                            ";
                                        } else if($values['status'] == "confirmed") {
                                            echo"
                                                <td class='action'>
                                                    <form action='?delete=yes & reserveid=$reserveid & roomid=$roomsid' method='POST'>
                                                        <input type='submit' value='Checkout' class='cancel' name='checkout'>
                                                    </form>
                                                </td>
                                            ";
                                        }
                                    }
                                }
                            }
                        ?>
                            
                        </tbody>
                    </table>
                    
                </div>
        </div>
    </body>

</html>