<html>
    <head>
        <title>Confirmed Reservations || Fleur Suites</title>
        <script src="js/jquery.js"></script>
        <script src="js/navscroll.js"></script>
        <script src="js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="images/title.ico">
        <link rel="stylesheet" type="text/css" href="styles/adminstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="styles/slideshowstyle.css">
    </head>

<body>

    <header>
        <div class="navbar">       
            <nav class="mynavbar">
                <ul>
                    <li class="login"><a href="logout.php">logout</a></li>
                </ul>
            </nav>
            <nav class="navbar">
                <ul>
                    <li class="home"><a href="adminhome.php">Request Reservation</a></li>
                    <li class="policy"><a href="adminconfirmreservation.php">Comfirmed Reservation</a></li>
                    <li class="rooms"><a href="adminroom.php">Manage Room</a></li>
                    <li class="contactus"><a href="adminreport.php">Manage Report</a></li>
                    <li class="aboutus"><a href="admincustomer.php">Manage Customer</a></li>
                    
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
        <p align="center" class="roomsstatement">Comfirmed Reservations</p>
    </div>

    <div class="roomsbody">
        <div class="roomsbodystatement">
            <p align="center" class="roomsbodystatement">
               
            </p>
    </div>

        <div class="managereservation">
                <p align="center" class="juniorsuitestatement">
                    List of Reservation Confirmed
                  
                </p>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Cusotmer ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Reservation Code</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                   
              <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dummy</td>
                        <td>Dec 12</td>
                        <td>Dec 23</td>
                        <td>0001</td>
                        <td>0001</td>
                        <td>0001</td>
                        <td><a href="deletecomplaint.php?delete=yes & c_id=<?php echo $values['c_id']; ?>">DELETE</a>
                        <td><a href="updatecomplaint.php?update=yes & c_id=<?php echo $values['c_id']; ?>">UPDATE</a>
                    </tr>
              </tbody>
              </table>
              </div>
</body>

</html>