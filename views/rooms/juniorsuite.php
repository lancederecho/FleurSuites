<?php 
    include "../../controllers/juniorsuitecheckinoutfunction.php";
    include "../../controllers/juniorsuitesfunction.php";
?>

<?php

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
                                <li class="rooms"><a href="rooms.php">Rooms</a></li>
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
    }
?>

<html>
    <head>
        <title>Junior Suite || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/slideshow.js"></script>
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/juniorsuitestyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
    </head>

    <body>
        <div class="backgroundrooms">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="juniorsuitestatement">
            <p align="center" class="juniorsuitestatement">JUNIOR SUITE</p>
        </div>

        <div class="juniorsuitebody">
            <div class="juniorsuitemorebody">
                <div class="roomsback">
                    <a href="rooms.php">
                        <img class="roomsback" src="../images/icons/back.ico"/>
                    </a>
                </div>
                <div class="juniorsuitemorebodystatement">
                    <p class="juniorsuitemorebodystatement">
                        <?php echo $type; ?>
                    </p>
                </div>
                <div class="juniorsuitemore">
                    <div class="juniorsuitemoreimages">
                        <div class="slideshow">
                            <div class="mySlides fade">
                                <img src="../images/juniorsuiteimages/big1.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/juniorsuiteimages/big2.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/juniorsuiteimages/big3.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/juniorsuiteimages/big4.jpg">
                            </div>
                            <div class="mySlides fade">
                                <img src="../images/juniorsuiteimages/big5.jpg">
                            </div>

                            <a class="prev" align="center" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" align="center" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <div class="juniorsuitesimages">
                            <ul class="juniorsuitesimage">
                                <a class="juniorsuitesimage1" onclick="selectSlides(1)">
                                    <img src="../images/juniorsuiteimages/1.jpg">
                                </a>
                                <a class="juniorsuitesimage2" onclick="selectSlides(2)">
                                    <img src="../images/juniorsuiteimages/2.jpg">
                                </a>
                                <a class="juniorsuitesimage3" onclick="selectSlides(3)">
                                    <img src="../images/juniorsuiteimages/3.jpg">
                                </a>
                                <a class="juniorsuitesimage4" onclick="selectSlides(4)">
                                    <img src="../images/juniorsuiteimages/4.jpg">
                                </a>
                                <a class="juniorsuitesimage5" onclick="selectSlides(5)">
                                    <img src="../images/juniorsuiteimages/5.jpg">
                                </a>
                            </ul>
                        </div>
                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);
                        </script>
                    </div>
                    <div class="juniorsuitemoreproperties">
                        <div class="juniorsuitemorepropertiesstatement">
                            <p class="juniorsuitemorepropertiesstatement">
                                Properties: 
                            </p>                            
                        </div>
                        <div class="juniorsuitemoreaccommodates">
                            <p class="juniorsuitemoreaccommodates">
                                Accommodates: <?php echo $accomodates; ?> 
                            </p>
                        </div>
                        <div class="juniorsuitemoresize">
                            <p class="juniorsuitemoresize">
                                Size: <?php echo $size; ?>
                            </p>
                        </div>
                        <div class="juniorsuitemorebeds">
                            <p class="juniorsuitemorebeds">
                                Beds: <?php echo $numbedding; ?> <?php echo $bedding; ?>(s)
                            </p>
                        </div>
                    </div>   
                    <div class="juniorsuitemoreinfo">
                        <div class="juniorsuitemoreinfostatement">
                            <p class="juniorsuitemoreinfostatement">
                                More Info: 
                            </p>                            
                        </div> 
                        <div class="juniorsuitemoremoreinfo">
                            <p class="juniorsuitemoremoreinfo">
                                <?php echo $moreinfo; ?> 
                            </p>
                        </div>                    
                    </div>   
                    <div class="juniorsuitemoreamenities">
                        <div class="juniorsuitemoreamenitiesstatement">
                            <p class="juniorsuitemoreamenitiesstatement">
                                Amenities: 
                            </p>                            
                        </div>
                        <div class="juniorsuitemoreamenitiesac">
                            <div class="juniorsuitemoreamenitiesacimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiesactitle">
                                <p class="juniorsuitemoreamenitiesactitle">
                                    A/C
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitiestv">
                            <div class="juniorsuitemoreamenitiestvimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiestvtitle">
                                <p class="juniorsuitemoreamenitiestvtitle">
                                    TV
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitiesminibar">
                            <div class="juniorsuitemoreamenitiesminibarimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiesminibartitle">
                                <p class="juniorsuitemoreamenitiesminibartitle">
                                    Minibar
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitieskitchen">
                            <div class="juniorsuitemoreamenitieskitchenimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitieskitchentitle">
                                <p class="juniorsuitemoreamenitieskitchentitle">
                                    Kitchen
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitieswifi">
                            <div class="juniorsuitemoreamenitieswifiimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitieswifititle">
                                <p class="juniorsuitemoreamenitieswifititle">
                                    Wifi
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitiessafe">
                            <div class="juniorsuitemoreamenitiessafeimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiessafetitle">
                                <p class="juniorsuitemoreamenitiessafetitle">
                                    Safe
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitiestelephone">
                            <div class="juniorsuitemoreamenitiestelephoneimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiestelephonetitle">
                                <p class="juniorsuitemoreamenitiestelephonetitle">
                                    Telephone
                                </p>
                            </div>
                        </div>
                        <div class="juniorsuitemoreamenitiestowels">
                            <div class="juniorsuitemoreamenitiestowelsimg">
                                <!-- <img src="../images/juniorsuiteimages/5.jpg"> -->
                            </div>
                            <div class="juniorsuitemoreamenitiestowelstitle">
                                <p class="juniorsuitemoreamenitiestowelstitle">
                                    Towels
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="juniorsuitemoreterms">
                        <div class="juniorsuitemoretermsstatement">
                            <p class="juniorsuitemoretermsstatement">
                                Terms: 
                            </p>                            
                        </div>
                        <div class="juniorsuitemoretermstitle">
                            <a href="" class="juniorsuitemoretermstitle">
                                Read Our Policies
                            </a>
                        </div>                       
                    </div>  
                </div>
                <div class="juniorsuitecheckinout">
                    <div class="juniorsuitecheckinoutprice">
                        <p class="juniorsuitecheckinoutpricefrom">
                            From
                        </p>
                        <p class="juniorsuitecheckinoutprice">
                            ₱<?php echo $price; ?>
                        </p>
                        <p class="juniorsuitecheckinoutpricepernight">
                            Per Night
                        </p>
                    </div>

                    <!-- Check in Check Out -->
                    <form action="" class="juniorsuitecheckinout" method="post">
                        <div class="juniorsuitecheckin">
                            <input placeholder="Check In" name="juniorsuitecheckin" class="juniorsuitecheckin" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  min="<?php echo $checkindate; ?>">
                        </div>
                        <div class="juniorsuitecheckout">
                            <input placeholder="Check Out" name="juniorsuitecheckout" class="juniorsuitecheckout" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" min="<?php echo $checkoutdate; ?>">
                        </div>
                        <div class="juniorsuitecheckinoutreserve">
                            <input type="submit" class="reservebutton" id="reservebutton" name="reservebutton" value="Reserve Now"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>

</html>