<?php include "../../models/Users.php"; ?>

<?php
    session_start();

	$loginemail = isset($_REQUEST['loginemail'])? $_REQUEST["loginemail"]:NULL;
	$loginpass = isset($_REQUEST['loginpass'])? $_REQUEST["loginpass"]:NULL;


    $users = new Users();
    
    $loggedin = false;
 
	if(isset($_REQUEST['loginbutton']) && $_REQUEST['loginbutton'] == "Login"){
		$rows = $users->select_all_user();

		foreach($rows as $index => $values){
			$email = $values['useremail'];
			$pass = $values['userpassword'];
			if($email == $loginemail && $pass == $loginpass){
                $loggedin = true;

                //Sessions  
                if ($_POST && !empty($_POST['loginemail']) && !empty($_POST['loginpass'])){
                    $_SESSION['userid'] = $values['userid'];
                }
                if ($_POST && !empty($_POST['loginemail'])){
                    $_SESSION['loginemail'] = $_POST['loginemail'];
                }
                if ($_POST && !empty($_POST['loginpass'])){
                    $_SESSION['loginpass'] = $_POST['loginpass'];
                }
                if (!empty($values['userfirstname'])){
                    $_SESSION['userfirstname'] = $values['userfirstname'];
                }
                if (!empty($values['userlastname'])){
                    $_SESSION['userlastname'] = $values['userlastname'];
                }
                if (!empty($values['userphonenumber'])){
                    $_SESSION['userphonenumber'] = $values['userphonenumber'];
                }
                if (!empty($values['usercountry'])){
                    $_SESSION['usercountry'] = $values['usercountry'];
                }
                if (!empty($values['usercountrycode'])){
                    $_SESSION['usercountrycode'] = $values['usercountrycode'];
                }

                echo "
                <script>
				    window.location.href=\"../index.php?select=yes\";
                </script>";
            }    
        }
        
        if($loggedin == false) {
            echo "
                <script>
                    window.alert('Invalid Username or Password!');
                </script>";
        }

	}

	$users->close();


?>