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
                               
                                <li class="userprofile"><a href="../controllers/logoutfunction.php">
                                    <?php
                                        echo $_SESSION['adminfirstname'];
                                    ?>
                                </a></li>
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
        <title>Manage Report || Fleur Suites</title>
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
            <p align="center" class="roomsstatement">Manage Report</p>
        </div>

        <div class="roomsbody">
            <div class="roomsbodystatement">
                <p align="center" class="roomsbodystatement">
                   
                </p>
   
                </div> 
            <div class="managereservation">
                
                
                    <p align="center" class="juniorsuitestatement">
                       List of Customer Reports
                      
                    </p>
                    <table class="myreservationstable">
                        <thead>
                        <tr>
                         
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                         
                            <th></th>
                        </tr>
                        </thead>                      
                  <tbody>
                        <tr>

<?php 
$conn = mysqli_connect ("localhost","root","","hoteldb");		
$sql = "SELECT * from report";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$purchaserows= $result;
} 
if (empty($purchaserows)) {

}else{

foreach($purchaserows as $index => $values): 
$reportid=$values['reportid'];			
$name=$values['name']; 
$email=$values['email'];
$subject=$values['subject'];
$message=$values['message'];

?>
<td><?php echo $name; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $subject; ?></td>
<td><?php echo $message; ?></td>
<td><a href="deletereport.php?delete=yes & reportid=<?php echo $values['reportid']; ?>">DELETE</a>
</td>
</tr>
<?php endforeach; ?>
<?php } ?>
                  </tbody>
                  </table>

                  </div>           
                 
    </body>

</html>