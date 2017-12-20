<?php session_start(); 
    if(!isset($_SESSION['adminfirstname'])){
    header("location:../account/login.php");
    }
?>

<html>
<link rel="shortcut icon" href="images/title.ico">
<header>
    <div class="navbar">       
    <nav class="mynavbar">
        <ul>
           
            <li class="userprofile"><a href="">
                <?php
                    echo $_SESSION['adminfirstname'];
                ?>  </a></li>
            <li class="logout"><a href="../../controllers/logoutfunction.php">Logout</a></li>
        </ul>
        </nav>

    <nav class="navbar">
        <ul>
            <li class="home"><a href="adminhome.php">Request Reservation</a></li>
            <li class="policy"><a href="adminconfirmreservation.php">Comfirmed Reservation</a></li>
            <li class="rooms"><a href="adminroom.php">Manage Room</a></li>
            <li class="contactus"><a href="adminreport.php">Manage Report</a></li>
            <li class="aboutus"><a href="admincustomer.php">Manage Customer</a></li>
            <li class="aboutus"><a href="history.php">History</a></li>
        </ul>
    </nav>
<a class="navbarlogo" href="index.php">
<img alt="logo" src="../images/logos/FleurSuitesLogo.png"/>
</a> 
</div>  
</header>
    <head>
        <title>Manage Customer || Fleur Suites</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/navscroll.js"></script>
        <script src="../js/homeSlideshow.js"></script>
        <link rel="shortcut icon" href="../images/title.ico">
        <link rel="stylesheet" type="text/css" href="../styles/adminstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/navbarstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/slideshowstyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/myreservationstyle.css">
    </head>

<body>
        <div class="backgroundrooms">
        <img src="../images/room1.png" style="width:100%">
        </div>

        <div class="roomsstatement">
        <p align="center" class="roomsstatement">Manage Customer</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
            <p align="center" class="roomsbodystatement"></p>
        </div> 
        <div class="managereservation">

        <p align="center" class="juniorsuitestatement">List of Customers</p>


        <table class="myreservationstable">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Email</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Phone Number</th>
                    <th></th>
                   
                </tr>
            </thead>

        <tbody>
        <tr>
        <?php 
        $conn = mysqli_connect ("localhost","root","","hoteldb");		
        $sql = "SELECT * from user";	
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        $purchaserows= $result;
        } 
        if (empty($purchaserows)) {

        }else{

        foreach($purchaserows as $index => $values): 			
        $userid=$values['userid']; 
        $useremail=$values['useremail']; 
        $userfirstname=$values['userfirstname']; 
        $userlastname=$values['userlastname'];
        $usergender=$values['usergender'];
        $userbirthdate=$values['userbirthdate'];
        $usercity=$values['usercity']; 
        $usercountry=$values['usercountry'];
        $userphonenumber=$values['userphonenumber'];

        ?>

                    <td><?php echo $userid; ?></td>
                    <td><?php echo $useremail; ?></td>
                    <td><?php echo $userfirstname; ?></td>
                    <td><?php echo $userlastname; ?></td>
                    <td><?php echo $usergender; ?></td>
                    <td><?php echo $userbirthdate; ?></td>
                    <td><?php echo $usercity; ?></td>
                    <td><?php echo $usercountry; ?></td>
                    <td><?php echo $userphonenumber; ?></td>
                    <td><a href="deletecustomer.php?delete=yes & userid=<?php echo $values['userid']; ?>">DELETE</a></td>
                </tr>
            <?php endforeach; ?>
            <?php } ?>
            </tbody>
        </table>

    </div>           
</body>
</html>

