<?php include "../../models/Users.php"; ?>

<?php
    session_start();

    $user = new Users();
 
    $rows = $user->select_all_user();

    $curid = isset($_SESSION['userid'])? $_SESSION["userid"]:NULL;


    foreach($rows as $index => $values){
        $userid = $values['userid'];

        if($userid == $curid){
            $userfirstname = $values['userfirstname'];
            $userlastname = $values['userlastname'];
            $useremail = $values['useremail'];
            $usergender = $values['usergender'];
            $userbirthdate = $values['userbirthdate'];
            $useraddressline = $values['useraddressline1'];
            $usercity = $values['usercity'];
            $usercountry = $values['usercountry'];
            $usercountrycode = $values['usercountrycode'];
            $userphonenumber = $values['userphonenumber'];
        } else {

        } 
    }

    $firstname = isset($_REQUEST['userfirstname'])? $_REQUEST["userfirstname"]:NULL;
    $lastname = isset($_REQUEST['userlastname'])? $_REQUEST["userlastname"]:NULL;
    $email = isset($_REQUEST['useremail'])? $_REQUEST["useremail"]:NULL;
    $gender = isset($_REQUEST['usergender'])? $_REQUEST["usergender"]:NULL;
    $birthdate = isset($_REQUEST['userbirthdate'])? $_REQUEST["userbirthdate"]:NULL;
    $addressline = isset($_REQUEST['useraddressline'])? $_REQUEST["useraddressline"]:NULL;
    $city = isset($_REQUEST['usercity'])? $_REQUEST["usercity"]:NULL;
    $country = isset($_REQUEST['usercountry'])? $_REQUEST["usercountry"]:NULL;
    $countrycode = isset($_REQUEST['usercountrycode'])? $_REQUEST["usercountrycode"]:NULL;
    $phonenumber = isset($_REQUEST['userphonenumber'])? $_REQUEST["userphonenumber"]:NULL;

    if(isset($_REQUEST['done']) && $_REQUEST['done'] == "Done"){
        $user->update_user($firstname, $lastname, $email, $gender, $birthdate, $addressline, 
                        $city, $country, $countrycode, $phonenumber, $curid);
        echo "
                    <script>
                        window.location.href=\"profile.php\";
                    </script>";
    }
        
	$user->close();


?>