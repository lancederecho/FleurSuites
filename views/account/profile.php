<?php include "../../controllers/editfunction.php"; ?>

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
                                <li class="userprofile"><a href="">
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
    } else {
        header("location:login.php");
    }
?>

<html>
    <head>
        <title><?php echo $_SESSION['userfirstname'];?> || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/profilestyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
    </head>

    <body>

        <div class="backgroundprof">
            <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="profstatement">
            <p align="center" class="profstatement">Welcome<?php echo", ";echo $_SESSION['userfirstname'];?></p>
        </div>

        <div class="profbody">
            <div class="profbodycontent">
                <p class="myprofile">
                    MY PROFILE
                </p>
                <div class="edit">
                    <a href="edit.php" class="edit">Edit</a>
                </div>
                <div class="myprofile">
                    <ul class="nameetc">
                        <li>Name </li>
                        <li>Email Address </li>
                        <li>Gender </li>
                        <li>Date of Birth </li>
                        <li>Address Line</li>
                        <li>City</li>
                        <li>Country </li>
                        <li>Phonenumber </li>
                    </ul>
                    <ul class="nameetccontent">
                        <li><?php 
                                echo $userfirstname;
                                echo " ";
                                echo $userlastname;
                            ?>
                        </li>
                        <li><?php echo $useremail; ?></li>
                        <li><?php echo $usergender; ?></li>
                        <li><?php echo $userbirthdate; ?></li>
                        <li><?php echo $useraddressline; ?></li>
                        <li><?php echo $usercity; ?></li>
                        <li><?php echo $usercountry; ?></li>
                        <li><?php 
                                echo "+";
                                echo $usercountrycode;
                                echo $userphonenumber;
                            ?>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

    </body>

</html>