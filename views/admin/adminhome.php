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
        <title>Manage Customer || Fleur Suites</title>
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
            <p align="center" class="roomsstatement">Manage Reservations</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
                <p align="center" class="roomsbodystatement">
                   
                </p>
   
                </div> 
            <div class="managereservation">
                
                
                    <p align="center" class="juniorsuitestatement">
                       Reservation Requests
                      
                    </p>

                
          
                    <table class="myreservationstable" align="center">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Reservation ID</th>
                            <th>Reservation date</th>
                            <th>Check In/Out Time</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>No. of Days</th>
                            <th>Room ID</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                        </thead>
                       
                  <tbody>
                        <tr>
<?php 
                        if ($rows > 0) {
                           $count = 0;

                            foreach($rows as $index => $values){
                                $userid = $values['userid'];
                                $reserveid = $values['reserveid'];
                                $roomid = $values['roomid'];

                                if(isset($values['status']) && $values['status'] == "pending") {
                                    foreach($userrows as $userindex => $uservalues){
                                        $userid = $values['userid'];
        
                                        if($userid == $uservalues['userid']){
                                            if($count == 0) {
                                            echo"<tr>
                                                <td>".$uservalues['userfirstname']." ".$uservalues['userlastname']."</td>
                                                ";
                                            }    
                                        }
                                    }
                                                                    
                                    $_SESSION['historyreserveid']=$values['reserveid'];
                                    $_SESSION['historydatereserved']=$values['datereserved'];
                                    $_SESSION['historychecktime']=$values['checktime'];
                                    $_SESSION['historycheckin']=$values['checkin'];
                                    $_SESSION['historycheckout']=$values['checkout'];
                                    $_SESSION['historynumofdays']=$values['numofdays'];
                                    $_SESSION['historyroomid']=$values['roomid'];
                                    $_SESSION['historyuserid']=$values['userid'];

                                    echo"
                                        <td>".$values['reserveid']."</td>
                                        <td>".$values['datereserved']."</td>
                                        <td>".$values['checktime']."</td>
                                        <td>".$values['checkin']."</td>
                                        <td>".$values['checkout']."</td>
                                        <td>".$values['numofdays']."</td>
                                        <td>".$values['roomid']."</td>
                                        <td>".$values['status']."</td>
                                        <td>
                                            <a href='deletereservation.php?delete=yes & reserveid=$reserveid'>DELETE</a>
                                        </td>
                                         <td>
                                            <a href='confirmreservation.php?confirm=yes & roomid=$roomid & reserveid=$reserveid & userid=$userid'>CONFIRM</a>
                                        </td>
                                        ";
                                }
                            }
                        }
 ?> </tr>
                  </tbody>
                  </table>

                  </div>           
                 
    </body>

</html>