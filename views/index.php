<html>
    <head>
        <title>Welcome || Fleur Suites</title>
        <script src="js/jquery.js"></script>
        <script src="js/navscroll.js"></script>
        <script src="js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/slideshowstyle.css">
    </head>

    <body>
    
        <header>
            <div class="navbar">       
                <nav class="mynavbar">
                    <ul>
                        <li class="myreservations"><a href="myreservations.html">My Reservations</a></li>
                        <li class="login"><a href="account/login.php">LogIn</a></li>
                    </ul>
                </nav>
                <nav class="navbar">
                    <ul>
                        <li class="home"><a href="../index.php">Home</a></li>
                        <li class="accomodations"><a href="accomodations.html">Accomodations</a></li>
                        <li class="contactus"><a href="contactus.html">Contact Us</a></li>
                        <li class="aboutus"><a href="aboutus.html">About Us</a></li>
                    </ul>
                </nav>
                <a class="navbarlogo" href="aboutme.html">
                    <img alt="logo" src="images/logos/FleurSuitesLogo.png"/>
                </a> 
            </div>  
        </header>   

        <div class="slideshow">
            <div class="mySlides fade">
                <img src="images/room1.png" style="width:100%">
                <div class="text"></div>
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
        </script>    

        <div class="homebody">
        
        </div>

    </body>

</html>