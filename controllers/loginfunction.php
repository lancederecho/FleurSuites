<?php include "../../models/Users.php"; ?>

<?php

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