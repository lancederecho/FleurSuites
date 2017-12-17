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
       <p align="center" class="roomsstatement">Rooms Information</p>

   </div>

   <div class="roomsbody">
       <div class="roomsbodystatement">
           <p align="center" class="roomsbodystatement">
              
           </p>

           </div> 
       <div class="managereservation">
           
           
               <p align="center" class="juniorsuitestatement">
                  Manage Rooms  </p>  
               
              
<br> 
               <table class="myreservationstable">
                   <thead>
                   <tr>
                    
                       <th>Room ID</th>
                       <th>Room name</th>
                       <th>Room Price</th>
                       <th>No. of Bed</th>
                       <th>Room Type</th>
                       <th>Room Size</th>
                       <th>Amenities</th>
                       <th>Status</th>
                    
                       <th>Action</th>
                   </tr>
                   </thead>
                  
             <tbody>
                   <tr>
                   <?php 
$conn = mysqli_connect ("localhost","root","","hoteldb");		
$sql = "SELECT * from rooms";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$user= $result;
} 
if (empty($user)) {

}else{

foreach($user as $index => $values): 			
$roomid=$values['roomid']; 
$type=$values['type']; 
$price=$values['price']; 
$numbedding=$values['numbedding'];
$bedding=$values['bedding'];
$size=$values['size'];
$amennities=$values['amenities']; 
$status=$values['status'];


?>
<td><?php echo $roomid; ?></td>
<td><?php echo $type; ?></td>
<td><?php echo $price; ?></td>
<td><?php echo $numbedding; ?></td>
<td><?php echo $bedding; ?></td>
<td><?php echo $size; ?></td>
<td><?php echo $amennities; ?></td>
<td><?php echo $status; ?></td>

<td><a href="">DELETE</a>
</td>
</tr>
<?php endforeach; ?>
<?php } ?>
             </tbody>
             </table>

             </div>           
            
</body>

</html>