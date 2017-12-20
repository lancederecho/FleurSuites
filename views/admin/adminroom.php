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
   <title>Manage Rooms || Fleur Suites</title>
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
        <div class="addrooms">
            <a href="addrooms.php" class="addrooms">Add</a>
        </div>
               
              
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
                        <th>Current Customer</th>
                        <th>Admin ID</th>
                        <th>Status</th>
                        <th>Action</th>
                   </tr>
                   </thead>
                  
             <tbody>
                   <tr>
                   <?php 
$conn = mysqli_connect ("localhost","root","","hoteldb");		

$sql = "SELECT * from rooms";
$usersql = "SELECT * from user";	

$result = $conn->query($sql);
$userresult = $conn->query($usersql);

$count = 0;

if ($result->num_rows > 0) {
$user= $result;
} 
if($userresult->num_rows > 0) {
$name= $userresult;
}
if (empty($user)) {

}else{

foreach($user as $index => $values) {		
$roomid=$values['roomid']; 
$type=$values['type']; 
$price=$values['price']; 
$numbedding=$values['numbedding'];
$bedding=$values['bedding'];
$size=$values['size'];
$amennities=$values['amenities']; 
$status=$values['status'];
$userid = $values['userid'];
if ($values['adminid'] > 0) {
    $adminid = $values['adminid'];
} else {
    $adminid = " ";
}

if ($status == "Taken") {
foreach($name as $userindex => $uservalues){
    $userid = $values['userid'];
    if($count == 0){
        if($userid == $uservalues['userid']){
            $firstname = $uservalues['userfirstname'];
            $lastname = $uservalues['userlastname'];
/*             $count++; */
        }
    }
}
} else {
        $firstname = "No";
        $lastname = "Customer";    
}



?>
<td><?php echo $roomid; ?></td>
<td><?php echo $type; ?></td>
<td><?php echo $price; ?></td>
<td><?php echo $numbedding; ?></td>
<td><?php echo $bedding; ?></td>
<td><?php echo $size; ?></td>
<td><?php echo $amennities; ?></td>
<td><?php
    echo $firstname; 
    echo " ";
    echo $lastname;
    ?>
</td>
<td><?php echo $adminid; ?></td>
<td><?php echo $status; ?></td>
<?php
echo"
    <td><a href='deleteroomfunction.php?delete=yes & roomid=$roomid'>DELETE</a>
";
?>
</td>
</tr>
<?php } ?>
<?php } ?>
             </tbody>
             </table>

             </div>           
            
</body>

</html>