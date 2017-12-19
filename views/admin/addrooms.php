<?php include "addroomsfunction.php";?>

<?php session_start(); 
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
   <title>Add Room || Fleur Suites</title>
   <script src="../js/jquery.js"></script>
   <script src="../js/navscroll.js"></script>
   <script src="../js/homeSlideshow.js"></script>
   <link rel="shortcut icon" href="../images/title.ico">
   <link rel="stylesheet" type="text/css" href="../styles/addroomsstyle.css">
   <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
   <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
   <link rel="stylesheet" type="text/css" href="../styles/myreservationstyle.css">
</head>

<body>
 

   <div class="backgroundrooms">
           <img src="../images/room1.png" style="width:100%">
   </div>

   <div class="roomsstatement">
       <p align="center" class="roomsstatement">Add Rooms</p>

   </div>

   <div class="roomsbody">
       <div class="roomsbodystatement">
           <p align="center" class="roomsbodystatement">
              
           </p>
        </div> 

        <form action="" method="post">
            <div class="managereservation">   
                <p align="center" class="juniorsuitestatement">
                    Choose a Room  
                </p>  
                <input required type="number" min="1" max="50" class="numrooms" name="numrooms" placeholder="Number of Rooms">
                <div class="juniorsuite">
                    <input type="submit" class="juniorsuite" name="juniorsuite" value="Junior Suite">
                </div>

                <div class="standardroom">
                    <input type="submit" class="standardroom" name="standardroom" value="Standard Room">
                </div>

                <div class="superiorroom">
                    <input type="submit" class="superiorroom" name="superiorroom" value="Superior Room">
                </div>
            </div>     
        </form>    

        </div>
</body>

</html>