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
                if ($_POST && !empty($_POST['loginemail'])){
                    $_SESSION['loginemail'] = $_POST['loginemail'];
                }
                if ($_POST && !empty($_POST['loginpass'])){
                    $_SESSION['loginpass'] = $_POST['loginpass'];
                }
                if (!empty($values['userfirstname'])){
                    $_SESSION['userfirstname'] = $values['userfirstname'];
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