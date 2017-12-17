<?php include "../../controllers/roomsfunction.php"; ?>

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
                                <li class="rooms"><a href="rooms.php">Rooms</a></li>
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
        ?>
            <html>
                <link rel="shortcut icon" href="../images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="register"><a href="../account/register.php">Register</a></li>
                                <li class="login"><a href="../account/login.php">LogIn</a></li>
                            </ul>
                        </nav>
                        <nav class="navbar">
                            <ul>
                                <li class="home"><a href="../index.php">Home</a></li>
                                <li class="rooms"><a href="rooms.php">Rooms</a></li>
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
    }
?>

<html>
    <head>
        <title>Rooms || Fleur Suites</title>
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
            <p align="center" class="roomsstatement">ROOMS</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
                <p align="center" class="roomsbodystatement">
                   
                </p>
            </div>
            <div class="juniorsuite">
                <div class="juniorsuiteimg">
                    <img src="../images/juniorSuite.png" style="width:100%">
                </div>
                <div class="juniorsuitestatement">
                    <p align="left" class="juniorsuitestatement">
                        <?php echo $juniortype; ?>
                    </p>
                </div>
                <div class="juniorsuitemoreinfo">
                    <div class="juniorsuitefrom">
                        <p align="left" class="juniorsuitefrom">
                            FROM
                        </p>  
                    </div>                                         
                    <div class="juniorsuiteprice">
                        <p align="left" class="juniorsuiteprice">
                            ₱<?php echo $juniorprice; ?>
                        </p>
                    </div>
                    <div align="center" class="juniorsuitemoreinfobutton">
                        <a href="juniorsuite.php" class="juniorsuitemoreinfobutton">More Info</a>
                    </div>                    
                </div>
            </div>

            <div class="standardroom">
                <div class="standardroomimg">
                    <img src="../images/standardRoom.png" style="width:100%">
                </div>
                <div class="standardroomstatement">
                    <p align="left" class="standardroomstatement">
                        <?php echo $standardtype; ?>
                    </p>
                </div>
                <div class="standardroommoreinfo">
                    <div class="standardroomfrom">
                        <p align="left" class="standardroomfrom">
                            FROM
                        </p>  
                    </div>                                         
                    <div class="standardroomprice">
                        <p align="left" class="standardroomprice">
                            ₱<?php echo $standardprice; ?>
                        </p>
                    </div>
                    <div align="center" class="standardroommoreinfobutton">
                        <a href="standardroom.php" class="standardroommoreinfobutton">More Info</a>
                    </div>                    
                </div>
            </div>

            <div class="superiorroom">
                <div class="superiorroomimg">
                    <img src="../images/superiorRoom.png" style="width:100%">
                </div>
                <div class="superiorroomstatement">
                    <p align="left" class="superiorroomstatement">
                        <?php echo $superiortype; ?>
                    </p>
                </div>
                <div class="superiorroommoreinfo">
                    <div class="superiorroomfrom">
                        <p align="left" class="superiorroomfrom">
                            FROM
                        </p>  
                    </div>                                         
                    <div class="superiorroomprice">
                        <p align="left" class="superiorroomprice">
                            ₱<?php echo $superiorprice; ?>
                        </p>
                    </div>
                    <div align="center" class="superiorroommoreinfobutton">
                        <a href="superiorroom.php" class="superiorroommoreinfobutton">More Info</a>
                    </div>                    
                </div>
            </div>
        
        </div>
    </body>

</html>