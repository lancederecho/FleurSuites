<?php
    session_start();
    if ($_SESSION && isset($_SESSION['userfirstname'])) {
        ?>
            <html>
                <link rel="shortcut icon" href="images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="myreservations"><a href="transaction/myreservations.php">My Reservations</a></li>
                                <li class="userprofile"><a href="../controllers/logoutfunction.php">
                                    <?php
                                        echo $_SESSION['userfirstname'];
                                    ?>
                                </a></li>
                                <li class="logout"><a href="../controllers/logoutfunction.php">Logout</a></li>
                            </ul>
                        </nav>
                        <nav class="navbar">
                            <ul>
                                <li class="home"><a href="index.php">Home</a></li>
                                <li class="rooms"><a href="rooms/rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="contactus.php">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.php">About Us</a></li>
                                <li class="policy"><a href="policy.php">Policy</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="index.php">
                            <img alt="logo" src="images/logos/FleurSuitesLogo.png"/>
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
                                <li class="contactus"><a href="contactus.php">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.php">About Us</a></li>
                                <li class="policy"><a href="../policy.php">Policy</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="index.php">
                            <img alt="logo" src="images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>   
            </html>
        <?php
    }
?>

<html>
    <head>
        <title>About Developers || Fleur Suites</title>
        <script src="js/jquery.js"></script>
        <script src="js/navscroll.js"></script>
        <script src="js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="styles/aboutdevelopersstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/slideshowstyle.css">
    </head>

    <body>

        <div class="backgrounddev">
            <img src="images/room1.png" style="width:100%">
        </div>

        <div class="devstatement">
            <p align="center" class="devstatement">ABOUT DEVELOPERS</p>
        </div>

        <div class="devbody">
            <div class="devbodycontent">
                <div class="abenoja">
                    <div class="abenojaimg">

                    </div>
                    <ul class="nameetc">
                        <li>Name: </li>
                        <li>Sex: </li>
                        <li>Age: </li>
                        <li>Date of Birth: </li>
                        <li>Address: </li>
                        <li>Mobile Number: </li>
                        <li>Email Address: </li>
                    </ul>
                    <ul class="nameetccontent">
                        <li>Donell Abenoja</li>
                        <li>Male</li>
                        <li>19</li>
                        <li>December 29, 1997</li>
                        <li>San Pedro Ext. Road Davao City</li>
                        <li>09462556003</li>
                        <li>abenojadonell@gmail.com</li>
                    </ul>
                </div>
                <div class="claveria">
                    <div class="claveriaimg">

                    </div>
                    <ul class="nameetc">
                        <li>Name: </li>
                        <li>Sex: </li>
                        <li>Age: </li>
                        <li>Date of Birth: </li>
                        <li>Address: </li>
                        <li>Mobile Number: </li>
                        <li>Email Address: </li>
                    </ul>
                    <ul class="nameetccontent">
                        <li>Vergel Claveria</li>
                        <li>Male</li>
                        <li>21</li>
                        <li>November 2, 1996</li>
                        <li>Iñigo Extension Barrio Obrero Davao City</li>
                        <li>09101454606</li>
                        <li>claveriavergel@gmail.com</li>
                    </ul>
                </div>
                <div class="derecho">
                    <div class="derechoimg">

                    </div>
                    <ul class="nameetc">
                        <li>Name: </li>
                        <li>Sex: </li>
                        <li>Age: </li>
                        <li>Date of Birth: </li>
                        <li>Address: </li>
                        <li>Mobile Number: </li>
                        <li>Email Address: </li>
                    </ul>
                    <ul class="nameetccontent">
                        <li>Lance Derecho</li>
                        <li>Male</li>
                        <li>20</li>
                        <li>December 21, 1996</li>
                        <li>Sobrecarey St. Obrero, Davao City</li>
                        <li>09282608090</li>
                        <li>lderecho12@gmail.com</li>
                    </ul>
                </div>
                <div class="polido">
                    <div class="polidoimg">

                    </div>
                    <ul class="nameetc">
                        <li>Name: </li>
                        <li>Sex: </li>
                        <li>Age: </li>
                        <li>Date of Birth: </li>
                        <li>Address: </li>
                        <li>Mobile Number: </li>
                        <li>Email Address: </li>
                    </ul>
                    <ul class="nameetccontent">
                        <li>Nimrod Polido</li>
                        <li>Male</li>
                        <li>19</li>
                        <li>September 22, 1997</li>
                        <li>San Pedro Ext. Road Davao City</li>
                        <li>09786543210</li>
                        <li>nimrodpolido@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>

    </body>

</html>