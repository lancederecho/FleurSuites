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
                                <li class="contactus"><a href="../contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="../aboutus.html">About Us</a></li>
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
            window.location.href=\"../index.php\";
        </script>";
    }
?>

<html>
    <head>
        <title>My Reservations || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/roomsstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
    </head>

    <body>
        <div class="backgroundrooms">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="roomsstatement">
            <p align="center" class="roomsstatement">MY RESERVATIONS</p>
        </div>

        <div class="roomsbody">
            <div class="complaintbody">
                <div class="complainttable">
                    <table class="complainttable">
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
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                            $count = 0;

                            foreach($rows as $index => $values){
                                $userid = $values['userid'];
 
                                if($userid == $_SESSION['userid']){
                                    foreach($roomsrows as $roomsindex => $roomsvalues){
                                        $roomid = $roomsvalues['roomid'];
        
                                        if($roomid == $values['roomid']){
                                            if($count == 0) {
                                            echo"<tr>
                                                <th>".$roomsvalues['type']."</th>
                                                <th>".$roomsvalues['numbedding']." ".$roomsvalues['bedding']."(s)</th>
                                                <th>".$roomsvalues['size']."</th>
                                                ";
                                            }    
                                        }
                                    }
                                    echo"
                                        <th>".$values['datereserved']."</th>
                                        <th>".$values['checkin']."</th>
                                        <th>".$values['checkout']."</th>
                                        <th>".$values['numofdays']."</th>
                                        <th>".$values['status']."</th>
                                        <th>
                                        <form action='edit.php' method='POST'>
                                            <input type='submit' value='Cancel' id='cancel' name='cancel'>
                                            </form>
                                        </th>
                                        ";
                                }
                            }
                        ?>
                            
                        </tbody>
                    </table>
                    
                </div>
        </div>
    </body>

</html>