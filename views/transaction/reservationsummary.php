<?php include "../../controllers/reservationfunction.php"; ?>

<?php
    if ($_SESSION && isset($_SESSION['userfirstname'])) {
        if (isset($_SESSION['type'])) {
            ?>
                <html>
                    <link rel="shortcut icon" href="../images/title.ico">
                    <header>
                        <div class="navbar">       
                            <nav class="mynavbar">
                                <ul>
                                    <li class="myreservations"><a href="../transaction/myreservations.php">My Reservations</a></li>
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
                                    <li class="rooms"><a href="../rooms/rooms.php">Rooms</a></li>
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
                
                <html>
                    <head>
                        <title>Summary || Fleur Suites</title>
                        <script src="../js/jquery.js"></script>
                        <script src="../js/navscroll.js"></script>
                        <script src="../js/slideshow.js"></script>
                        <link rel="shortcut icon" href="images/title.ico">
                        <link rel="stylesheet" type="text/css" href="../styles/reservationsummarystyle.css">
                        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
                        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
                    </head>

                    <body>
                        <div class="backgroundrooms">
                            <img src="../images/hotelCashier.png" style="width:100%">
                        </div>

                        <div class="reservationsummarystatement">
                            <p align="center" class="reservationsummarystatement">RESERVATION SUMMARY</p>
                        </div>

                        <div class="reservationsummarybody">
                            <div class="reservationsummarymorebody">   
                                <div class="guestdetails">
                                    <div class="guestdetailsstatement">
                                        <p class="guestdetailsstatement">
                                            Guest Details
                                        </p>
                                    </div>
                                    <div class="guestdetailsname">
                                        <div class="guestdetailsnamestatement">
                                            <p class="guestdetailsnamestatement">
                                                Name:
                                            </p>
                                        </div>
                                        <div class="guestdetailsnameoutput">
                                            <p class="guestdetailsnameoutput">
                                                <?php 
                                                    echo $_SESSION['userfirstname'];
                                                    echo " ";
                                                    echo $_SESSION['userlastname']; 
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="guestdetailsemail">
                                        <div class="guestdetailsemailstatement">
                                            <p class="guestdetailsemailstatement">
                                                Email Address:
                                            </p>
                                        </div>
                                        <div class="guestdetailsemailoutput">
                                            <p class="guestdetailsemailoutput">
                                                <?php 
                                                    echo $_SESSION['loginemail']; 
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="guestdetailsphone">
                                        <div class="guestdetailsphonestatement">
                                            <p class="guestdetailsphonestatement">
                                                Phone Number:
                                            </p>
                                        </div>
                                        <div class="guestdetailsphoneoutput">
                                            <p class="guestdetailsphoneoutput">
                                                <?php 
                                                    echo "+";
                                                    echo $_SESSION['usercountrycode']; 
                                                    echo $_SESSION['userphonenumber']; 
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="guestdetailscountry">
                                        <div class="guestdetailscountrystatement">
                                            <p class="guestdetailscountrystatement">
                                                Country:
                                            </p>
                                        </div>
                                        <div class="guestdetailscountryoutput">
                                            <p class="guestdetailscountryoutput">
                                                <?php 
                                                    echo $_SESSION['usercountry']; 
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="guestdetailspolicy">
                                        <p class="guestdetailspolicy">
                                            • By completing this reservation I acknowledge I have read and accepted the Property Policies.
                                        </p>
                                    </div>
                                    <div class="reserveyourroom">
                                        <form action="" method="post">
                                        <input type="submit" name="reserveyourroombutton" class="reserveyourroombutton" value="Reserve Your Room">
                                        </form>
                                    </div>
                                </div>
                                <div class="ordersummary">
                                    <div class="ordersummarystatement">
                                        <p class="ordersummarystatement">
                                            Order Summary
                                        </p>
                                    </div>
                                    <div class="ordersummaryimg">
                                        <img src="../images/juniorsuiteimages/big1.jpg">
                                    </div>
                                    <div class="ordersummaryroomdetails">
                                        <div class="ordersummaryroomtype">
                                            <div class="ordersummaryroomtypestatement">
                                                <p class="ordersummaryroomtypestatement">
                                                    Room Type
                                                </p>
                                            </div>
                                            <div class="ordersummaryroomtypechosen">
                                                <p class="ordersummaryroomtypechosen">
                                                    <?php echo $_SESSION['type']; ?>
                                                </p>
                                            </div>
                                        </div>    
                                        <div class="ordersummarydates">
                                            <div class="ordersummarydatesstatement">
                                                <p class="ordersummarydatesstatement">
                                                    Checkin
                                                </p>
                                            </div>
                                            <div class="ordersummarydatesstatementuntil">
                                                <p class="ordersummarydatesstatementuntil">
                                                    Checkout
                                                </p>
                                            </div>
                                            <div class="ordersummarydatescheckin">
                                                <p class="ordersummarydatescheckin">
                                                    <?php echo $_SESSION['checkin']; ?>  
                                                </p>
                                            </div >
                                            <div class="ordersummarydatescheckout">
                                                <p class="ordersummarydatescheckout">
                                                    <?php echo $_SESSION['checkout']; ?> 
                                                </p>
                                            </div>
                                        </div>  
                                        <div class="ordersummarynights">
                                            <div class="ordersummarynightsstatement">
                                                <p class="ordersummarynightsstatement">
                                                    No. of Nights
                                                </p>
                                            </div>
                                            <div class="ordersummarynightsnumber">
                                                <p class="ordersummarynightsnumber">
                                                    <?php echo $_SESSION['numofdays']; ?> 
                                                </p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ordersummarysubtotalcomputation">
                                        <div class="ordersummarysubtotal">
                                            <div class="ordersummarysubtotalstatement">
                                                <p class="ordersummarysubtotalstatement">
                                                    Subtotal
                                                </p>
                                            </div>
                                            <div class="ordersummarysubtotalprice">
                                                <p class="ordersummarysubtotalprice">
                                                    <?php
                                                        echo "₱"; 
                                                        $subtotal = $_SESSION['price'] * $_SESSION['numofdays'];
                                                        echo $subtotal; 
                                                    ?>
                                                </p>
                                            </div>
                                        </div>  
                                        <div class="ordersummaryreservationdeposit">
                                            <div class="ordersummaryreservationdepositstatement">
                                                <p class="ordersummaryreservationdepositstatement">
                                                    Deposit (30%)
                                                </p>
                                            </div>
                                            <div class="ordersummaryreservationdepositmult">
                                                <p class="ordersummaryreservationdepositmult">
                                                    x 0.30
                                                </p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="ordersummarytotalfinal">
                                        <div class="ordersummarytotal">
                                            <div class="ordersummarytotalstatement">
                                                <p class="ordersummarytotalstatement">
                                                    Total
                                                </p>
                                            </div>
                                            <div class="ordersummarytotalprice">
                                                <p class="ordersummarytotalprice">
                                                    <?php 
                                                        echo "₱";
                                                        $total= $subtotal * 0.3; 
                                                        echo $total;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>  
                                    </div>
                            </div>

                        </div>
                    </body>

                </html>
            <?php
        } else {
            echo "
            <script>
                window.location.href=\"../rooms/rooms.php\";
            </script>";
        }
    } else {
/*         ?>
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
                                <li class="rooms"><a href="../rooms/rooms.php">Rooms</a></li>
                                <li class="contactus"><a href="../contactus.html">Contact Us</a></li>
                                <li class="aboutus"><a href="../aboutus.html">About Us</a></li>
                            </ul>
                        </nav>
                        <a class="navbarlogo" href="../index.php">
                            <img alt="logo" src="images/logos/FleurSuitesLogo.png"/>
                        </a> 
                    </div>  
                </header>   
            </html>
        <?php */
        echo "
            <script>
                window.alert('Login to continue!');
                window.location.href=\"../account/login.php\";
            </script>";
    }
?>
