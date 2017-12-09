<?php

    session_start();

    if ($_SESSION /* && isset($_SESSION['adminfirstname']) */) {
        ?>
            <html>
                <link rel="shortcut icon" href="images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="myreservations"><a href="myreservations.php">My Reservations</a></li>
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
                                <li class="home"><a href="index.php">Home</a></li>
                                <li class="rooms"><a href="rooms/rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.html">About Us</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="index.php">
                            <img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>   
            </html>
        <?php
    } else {
        ?>
            <html>
                <link rel="shortcut icon" href="images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="register"><a href="account/register.php">Register</a></li>
                                <li class="login"><a href="account/login.php">LogIn</a></li>
                            </ul>
                        </nav>
                        <nav class="navbar">
                            <ul>
                                <li class="home"><a href="index.php">Home</a></li>
                                <li class="rooms"><a href="rooms/rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.html">About Us</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="index.php">
                            <img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>   
            </html>
        <?php
    }
?>

<html>
    <head>
        <title>Reservations Request || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/adminstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
    </head>

    <body>
        <div class="backgroundrooms">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="roomsstatement">
            <p align="center" class="roomsstatement">Request Reservations</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
        </div>  

        <div class="managereservation">
        <p align="center" class="juniorsuitestatement">
            List of Reservation Request
          
        </p>

        <table class="table">
            <thead>
            <tr>
                <th>Cusotmer ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Reservation Code</th>
                
            </tr>
            </thead>
           
      <tbody>
            <tr>
                <td>1</td>
                <td>Dummy</td>
                <td>Dec 12</td>
                <td>Dec 23</td>
                <td>0001</td>
                <td>0001</td>
                
                <td><a href="deletecomplaint.php?delete=yes & c_id=<?php echo $values['c_id']; ?>">CONFIRM</a>
                <td><a href="updatecomplaint.php?update=yes & c_id=<?php echo $values['c_id']; ?>">DELETE</a>
            </tr>
      </tbody>
      </table>
      </div>
</body>

</html>