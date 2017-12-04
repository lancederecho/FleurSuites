<?php

    session_start();

    if ($_SESSION && isset($_SESSION['userfirstname'])) {
        ?>
            <html>
                <link rel="shortcut icon" href="../images/title.ico">
                <header>
                    <div class="navbar">       
                        <nav class="mynavbar">
                            <ul>
                                <li class="myreservations"><a href="../myreservations.php">My Reservations</a></li>
                                <li class="userprofile"><a href="../controllers/logoutfunction.php">
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
                                <li class="rooms"><a href="../rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="../contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="../aboutus.html">About Us</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="../aboutme.html">
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
                                <li class="rooms"><a href="../rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="../contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="../aboutus.html">About Us</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="../aboutme.html">
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
        <script src="../js/slideshow.js"></script>
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/superiorroomstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
    </head>

    <body>
        <div class="backgroundrooms">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="superiorroomstatement">
            <p align="center" class="superiorroomstatement">SUPERIOR ROOM</p>
        </div>

        <div class="superiorroombody">
            <div class="superiorroommorebody">
                <div class="roomsback">
                    <a href="../rooms.php">
                        <img class="roomsback" src="../images/icons/back.ico"/>
                    </a>
                </div>
                <div class="superiorroommorebodystatement">
                    <p class="superiorroommorebodystatement">
                        Superior Room
                    </p>
                </div>
                <div class="superiorroommore">
                    <div class="superiorroommoreimages">
                        <div class="slideshow">
                            <div class="mySlides fade">
                                <img src="../images/superiorroomimages/big1.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/superiorroomimages/big2.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/superiorroomimages/big3.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/superiorroomimages/big4.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/superiorroomimages/big5.jpg">
                            </div>

                            <a class="prev" align="center" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" align="center" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <div class="superiorroomsimages">
                            <ul class="superiorroomsimage">
                                <a class="superiorroomsimage1" onclick="selectSlides(1)">
                                    <img class src="../images/superiorroomimages/1.jpg">
                                </a>
                                <a class="superiorroomsimage2" onclick="selectSlides(2)">
                                    <img class src="../images/superiorroomimages/2.jpg">
                                </a>
                                <a class="superiorroomsimage3" onclick="selectSlides(3)">
                                    <img class src="../images/superiorroomimages/3.jpg">
                                </a>
                                <a class="superiorroomsimage4" onclick="selectSlides(4)">
                                    <img class src="../images/superiorroomimages/4.jpg">
                                </a>
                                <a class="superiorroomsimage5" onclick="selectSlides(5)">
                                    <img class src="../images/superiorroomimages/5.jpg">
                                </a>
                            </ul>
                        </div>
                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);
                        </script>
                    </div>
                    <div class="superiorroommoreproperties">
                        <div class="superiorroommorepropertiesstatement">
                            <p class="superiorroommorepropertiesstatement">
                                Properties: 
                            </p>                            
                        </div>
                    </div>   
                    <div class="superiorroommoreinfo">
                        <div class="superiorroommoreinfostatement">
                            <p class="superiorroommoreinfostatement">
                                More Info: 
                            </p>                            
                        </div>                        
                    </div>   
                    <div class="superiorroommoreamenities">
                        <div class="superiorroommoreamenitiesstatement">
                            <p class="superiorroommoreamenitiesstatement">
                                Amenities: 
                            </p>                            
                        </div>
                    </div>
                    <div class="superiorroommoreterms">
                        <div class="superiorroommoretermsstatement">
                            <p class="superiorroommoretermsstatement">
                                Terms: 
                            </p>                            
                        </div>                       
                    </div>  
                </div>
                <div class="superiorroomcheckinout">
                    
                </div>
            </div>

        </div>
    </body>

</html>