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
       <p align="center" class="roomsstatement">Confirm Reservations</p>
   </div>

   <div class="roomsbody">
       <div class="roomsbodystatement">
           <p align="center" class="roomsbodystatement">
              
           </p>

           </div> 
       <div class="managereservation">
           
           
               <p align="center" class="juniorsuitestatement">
                Confirmed Reservation
                 
               </p>

           
               
               <table class="myreservationstable">
                   <thead>
                   <tr>
                            <th>User Name</th>
                            <th>Reservation ID</th>
                            <th>Reservation date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>No. of Days</th>
                            <th>Room ID</th>
                            <th>Status</th>
                            <th>Action</th>
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

                                if(isset($values['status']) && $values['status'] == "confirmed") {
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
                                    echo"
                                        <td>".$values['reserveid']."</td>
                                        <td>".$values['datereserved']."</td>
                                        <td>".$values['checkin']."</td>
                                        <td>".$values['checkout']."</td>
                                        <td>".$values['numofdays']."</td>
                                        <td>".$values['roomid']."</td>
                                        <td>".$values['status']."</td>
                                        <td>
                                            <a href='checkoutfunction.php?delete=yes & reserveid=$reserveid & roomid=$roomid'>Check-out</a>
                                        </td>
                                        ";
                                }

                            }
                        }
                            ?>
                   </tr>
             </tbody>
             </table>

             </div>           
            
</body>

</html>