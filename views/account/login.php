<html>
    <head>
        <title>LogIn || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/loginstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
    </head>

    <body>
    
        <header>
            <div class="navbar">       
                <nav class="mynavbar">
                    <ul>
                        <li class="myreservations"><a href="myreservations.html">My Reservations</a></li>
                        <li class="login"><a href="login.php">LogIn</a></li>
                    </ul>
                </nav>
                <nav class="navbar">
                    <ul>
                        <li class="home"><a href="../index.php">Home</a></li>
                        <li class="rooms"><a href="../rooms.php">Rooms</a></li>
                        <li class="contactus"><a href="../contactus.php">Contact Us</a></li>
                        <li class="aboutus"><a href="../aboutus.php">About Us</a></li>
                    </ul>
                </nav>
                <a class="navbarlogo" href="aboutme.html">
                    <img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
                </a> 
            </div>  
        </header>   

        <div class="backgroundlogin">
            <img src="../images/hotelCashier.png" style="width:100%">
        </div>

        <div class="loginstatement">
            <p align="center" class="loginstatement">MY ONLINE ACCOUNT</p>
        </div>

        <div class="loginbody">
            <div class="loginbodystatement">
                <p align="center" class="loginbodystatement">
                    To manage your bookings, register to create an online account. 
                    An easy platform to review pass stays, access to manage your current reservations.
                </p>
            </div>
            <div class="loginform">
                <div class="loginformstatement">
                    <p align="left" class="loginformstatement">
                        LOGIN TO YOUR ACCOUNT
                    </p>
                </div>
                <div class="tosignup">
                    <div class="tosignupstatement">
                        <p align="left" class="tosignupstatement">
                            DON'T HAVE AN ACCOUNT?
                        </p>
                    </div>
                    <div align="center" class="tosignupbutton">
                        <a href="register.php" class="tosignupbutton">Register</a>
                    </div>                    
                </div>
                <form action="" method="post" class="loginforminput">
                    <div class="loginforminputemailpass">
                        <div class="loginforminputemail">
                            <li class="loginemail">Email Address*</li>
                            <input type="text" class="loginemail" id="loginemail" name="loginemail" placeholder="Email Address"/><br/>
                        </div>
                        <div class="loginforminputpass">
                            <li class="loginpass">Password*</li>
                            <input type="password" class="loginpass" id="loginpass" name="loginpass" placeholder="Password"/><br/>    
                        </div>
                    </div>
                    <div class="loginforminputcheckbox">
                        <div class="loginformremember">
                            <input type="checkbox" class="loginremember" id="loginremember" name="loginremember"/>Remember me
                        </div>
                        <div class="loginformadmin">
                            <input type="checkbox" class="loginadmin" id="loginadmin" name="loginadmin"/>Login as Admin
                        </div>
                    </div>
                    <div class="loginforminputbutton">
                        <div class="loginbutton">
                            <input type="submit" class="loginbutton" id="loginbutton" name="loginbutton" value="Login"/>
                        </div>
                    </div>  
                </form>
            </div>
        </div>

    </body>

</html>