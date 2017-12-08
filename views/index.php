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
                                <li class="myreservations"><a href="myreservations.php">My Reservations</a></li>
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
                                <li class="contactus"><a href="contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.html">About Us</a></li>
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
                                <li class="contactus"><a href="contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="aboutus.html">About Us</a></li>
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
        <title>Welcome || Fleur Suites</title>
        <script src="js/jquery.js"></script>
        <script src="js/navscroll.js"></script>
<!--         <script src="js/slideshow.js"></script> -->
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/footerstyle.css">
<!--         <link rel="stylesheet" type="text/css" href="styles/slideshowstyle.css"> -->
    </head>

    <body>
        <div class="background">
            <video autoplay loop class="videobackground">
                <source src="videos/FleurHomeBackground.mp4" type="video/mp4">
            </video>
            <div class="backgroundtext">
                <p class="backgroundtext">FLEUR SUITES</p>
            </div>
            <div align="center" class="backgroundbutton">
                <a class="backgroundbutton" href="rooms.php">Get a Room ></a> 
            </div>
        </div>
 <!--        <div class="slideshow">
            <div class="mySlides fade">
                <img src="images/room1.png" style="width:100%">
                <div class="room1text">
                    <p align="center" class="room1text">FLEUR SUITES</p>
                </div>
                <div class="room1button">
                    <a class="room1button" href="rooms.php">Get a Room ></a> 
                </div>
            </div>
            <div class="mySlides fade">
                <img src="images/room2.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room3.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room4.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room5.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room6.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room7.png" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <img src="images/room8.png" style="width:100%">
                <div class="text"></div>
            </div>

            <a class="prev" align="center" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" align="center" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
        </script>     -->

        <div class="homebody">
            <div class="homerooms">
                <img class=homerooms src="images/room1.png" style="width:100%"> 
                <div align="center" class="homeroomsbutton">
                    <a href="rooms.php" class="homeroomsbutton">Rooms</a>
                </div>   
            </div>

            <div class="homeaboutus">
                <img class=homeaboutus src="images/room2.png" style="width:100%">
                <div align="center" class="homeaboutusbutton">
                    <a href="rooms.php" class="homeaboutusbutton">About Us</a>
                </div>  
            </div>
            
            <div class="homecontactus">
                <img class=homecontactus src="images/room4.png" style="width:100%">
                <div align="center" class="homecontactusbutton">
                    <a href="rooms.php" class="homecontactusbutton">Contact Us</a>
                </div>  
            </div>
            
        </div>

        <footer>
            <div align="center" class="footer">
                <div class="footercontent">
                    FOOTER
                </div>
                
            </div>
        </footer>
    </body>



</html>