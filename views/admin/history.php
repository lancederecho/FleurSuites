<?php include "../../controllers/adminfunction.php"; ?>

<?php
     if(!isset($_SESSION['adminfirstname'])){
        header("location:../account/login.php");
     }
?>

<html>

<link rel="shortcut icon" href="images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                               
                                <li class="userprofile"><a href="../controllers/logoutfunction.php">
                                    <?php
                                        echo $_SESSION['adminfirstname'];
                                    ?>
                                </a></li>
                                <li class="logout"><a href="../../controllers/logoutfunction.php">Logout</a></li>
                            </ul>
                        </nav>
                        <nav class="navbar">
                            <ul>
                            <li class="home"><a href="adminhome.php">Request Reservation</a></li>
                            <li class="policy"><a href="adminconfirmreservation.php">Comfirmed Reservation</a></li>
                            <li class="rooms"><a href="adminroom.php">Manage Room</a></li>
                            <li class="contactus"><a href="adminreport.php">Manage Report</a></li>
                            <li class="aboutus"><a href="admincustomer.php">Manage Customer</a></li>
                            <li class="aboutus"><a href="history.php">History</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="index.php">
                            <img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>
    <head>
        <title>History || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/adminstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/myreservationstyle.css">
    </head>

    <body>
      

        <div class="backgroundrooms">
                <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="roomsstatement">
            <p align="center" class="roomsstatement">Reservation History</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
                <p align="center" class="roomsbodystatement">
                   
                </p>
   
                </div> 
            <div class="managereservation">
                    <p align="center" class="juniorsuitestatement">
                       Reservation History
                      
                    </p>

                
          
                    <table class="myreservationstable" align="center">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Reservation ID</th>
                            <th>Confirmation Date</th>
                            <th>Reservation Date</th>
                            <th>Check In/Out Time</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>No. of Days</th>
                            <th>Room ID</th>
                        </tr>
                        </thead>
                       
                  <tbody>
                        <tr>
<?php 
                        if ($historyrows > 0) {
                            foreach($historyrows as $index => $values){
                                $userid = $values['userid'];
                                $reserveid = $values['reserveid'];
                                $roomid = $values['roomid'];
                                
                                foreach($userrows as $userindex => $uservalues){
                                    $userid = $values['userid'];
    
                                    if($userid == $uservalues['userid']){
                                        echo"<tr>
                                            <td>".$uservalues['userfirstname']." ".$uservalues['userlastname']."</td>
                                            ";
                                    }
                                }
                                echo"
                                    <td>".$values['reserveid']."</td>
                                    <td>".$values['dateconfirmed']."</td>
                                    <td>".$values['datereserved']."</td>
                                    <td>".$values['checktime']."</td>
                                    <td>".$values['checkin']."</td>
                                    <td>".$values['checkout']."</td>
                                    <td>".$values['numofdays']."</td>
                                    <td>".$values['roomid']."</td>
                                    ";
                            }
                        }
 ?> </tr>
                  </tbody>
                  </table>

                  </div>           
                 
    </body>

</html>