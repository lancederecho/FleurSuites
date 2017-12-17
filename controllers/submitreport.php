<?php include "../models/user.php" ; ?>

<?php



$name = isset($_REQUEST['name'])? $_REQUEST["name"]:NULL;
$email = isset($_REQUEST['email'])? $_REQUEST["email"]:NULL;
$subject = isset($_REQUEST['subject'])? $_REQUEST["subject"]:NULL;
$message = isset($_REQUEST['message'])? $_REQUEST["message"]:NULL;


$obj = new user();

if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="submit"){
	$result = $obj->addUser($name, $email, $subject, $message);
}

?>