<?php include "../controllers/submitreport.php"; ?>

<html>
 <head>
    <title>Contact Us || Fleur Suites</title>
    <script src="js/jquery.js"></script>
    <script src="js/navscroll.js"></script>
    <script src="js/homeSlideshow.js"></script>
    <link rel="shortcut icon" href="images/title.ico">
    <link rel="stylesheet" type="text/css" href="styles/contactus.css">
    <link rel="stylesheet" type="text/css" href="styles/navbarstyle.css">
    <link rel="stylesheet" type="text/css" href="styles/slideshowstyle.css">
</head> 

<body>

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
                    <li class="policy"><a href="policy.php">Policy</a></li>
                </ul>
            </nav>
            <a class="navbarlogo" href="aboutme.html">
                <img alt="logo" src="images/logos/FleurSuitesLogo.png"/>
            </a> 
        </div>  
    </header>   

    <div class="backgroundrooms">
        <img src="images/room1.png" style="width:100%">
    </div>

    <div class="roomsstatement">
        <p align="center" class="roomsstatement">CONTACT US</p>
    </div>

    <div class="roomsbody">
        <div class="roomsbodystatement">
            <p align="center" class="roomsbodystatement">
               
            </p>
    </div>
        
            <div class="contactus">
                <p class="contactus">
                    FOR QUESTIONS AND INQUIRES <br> <br>
                    Call (082) 291 5360 <br> <br>
                </p> 
                <p class="contactusnumber">
                    Fleur Suites is located in Ma-a Road, Davao City, Philippines<br> <br> 
                    @fleursuitesdavao <br> <br>
                    <a href="https://www.facebook.com/fleursuitesdavao/" target="_blank">
                    <img alt="facebook" title="facebook" src="images/logos/fblogo.png"/></a> 
                </p>   
               <div class="contactusmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.7062191334664!2d125.58246885790858!3d7.078089798722055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d40bfdf9377%3A0x36f22fc2322b4612!2sFleur+Suites+Davao!5e0!3m2!1sen!2sph!4v1511945945661" 
                    width="500" height="400" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
               </div>
                </div>

               <div class="contactform">
                    <form action="<?php $_PHP_SELF ?>" method="POST">
                    <p class="name">
                       Name <br> 
                        <input required type="text"  class="name" id="name" name="name" /> <br>    
                        </p>
                    
                    <p class="email">
                        Email Address <br>
                        <input required type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="email" id="email" name="email" /> <br>
                        </p>

                    <p class="subject">
                        Subject <br>
                        <input required type="text"  class="Subject" id="s ubject" name="subject"/> <br>    
                        </p>

                    <p class="message">
                        Message <br>
                        <textarea required type="text" name="message" id="message" cols="45" rows="10" ></textarea> <br>        
                        </p>
                            

                    <div align="center" class="sendbutton">
                    
                       <input type="submit"  name="submit" value="submit" >
                        <!-- <a href="<?php $_PHP_SELF ?>" name="submit" class="juniorsuitemoreinfobutton">SEND</a> -->
                    </form>
                    </div>    
                
            </div>    
        </div>
       
    
    </div>
</body>

</html>