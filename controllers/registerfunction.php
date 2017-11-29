<?php include "../../models/Users.php"; ?>

<?php
    echo "<html><head><link rel='shortcut icon' href='../images/title.ico'></head> ";

    //email
	$registeremail = isset($_REQUEST['registeremail'])? $_REQUEST["registeremail"]:NULL;
    //password
    $registerpass = isset($_REQUEST['registerpass'])? $_REQUEST["registerpass"]:NULL;
    //title
    $registertitle = isset($_REQUEST['registertitle'])? $_REQUEST["registertitle"]:NULL;
    //first name
    $registerfirst = isset($_REQUEST['registerfirst'])? $_REQUEST["registerfirst"]:NULL;
    //last name
    $registerlast = isset($_REQUEST['registerlast'])? $_REQUEST["registerlast"]:NULL;
    //gender
    $registergender = isset($_REQUEST['registergender'])? $_REQUEST["registergender"]:NULL;
    //date
    $registermonth = isset($_REQUEST['registermonth'])? $_REQUEST["registermonth"]:NULL;
    $registerday = isset($_REQUEST['registerday'])? $_REQUEST["registerday"]:NULL;
    $registeryear = isset($_REQUEST['registeryear'])? $_REQUEST["registeryear"]:NULL;
    $birthdate = $registeryear."-".$registermonth."-".$registerday;
    //address line 1
    $registerline1 = isset($_REQUEST['registerline1'])? $_REQUEST["registerline1"]:NULL;
    //city
    $registercity = isset($_REQUEST['registercity'])? $_REQUEST["registercity"]:NULL;
    //country
    $registercountry = isset($_REQUEST['registercountry'])? $_REQUEST["registercountry"]:NULL;
    //address line 1
    $registerline2 = isset($_REQUEST['registerline2'])? $_REQUEST["registerline2"]:NULL;
    //postal code
    $registerpostalcode = isset($_REQUEST['registerpostalcode'])? $_REQUEST["registerpostalcode"]:NULL;
    //country code
    $registercountrycode = isset($_REQUEST['registercountrycode'])? $_REQUEST["registercountrycode"]:NULL;
    //phone number
    $registerphonenum = isset($_REQUEST['registerphonenum'])? $_REQUEST["registerphonenum"]:NULL;

	$users = new Users();
 
	if(isset($_REQUEST['registerbutton']) && $_REQUEST['registerbutton']=="Register"){
        $result = $users->insert_user($registeremail, $registerpass, $registertitle, $registerfirst, 
                $registerlast, $registergender, $birthdate, $registerline1, $registercity, $registercountry, 
                $registerline2, $registerpostalcode, $registercountrycode, $registerphonenum);
		if($result){
            echo "
                <html>
                    <head>
                        <title>Success! || Fleur Suites</title>
                        <link rel='shortcut icon' href='../images/title.ico'>
                        <style>
                            div.registerbody{
                                display: none;
                            }
                            div.registersuccess{
                                z-index: 200;
                                background: rgb(240, 240, 240);
                                width: 100%;
                                height: 60%;
                                position: absolute;
                                box-shadow: 0 0 4px  rgba(0,0,0,0.9);
                                top: 50%;
                            }
                            div.registersuccessstatement{
                                background: white;
                                width: 40%;
                                height: 40%;
                                position: absolute;
                                border-top: solid 3px #222;
                                box-shadow: 0 0 4px  rgba(0,0,0,0.9);
                                top: 30%;
                                left: 30%;
                            }
                            p.registersuccessstatement{
                                margin: 5%;
                                color: #222;
                                font-family: sans-serif;
                                font-size: 18;
                                opacity: .9;
                            }
                            div.registersuccesssignin{
                                position: absolute; 
                                height: 7.2%;
                                width: 40%;
                                left: 30%;
                                top: 55%;
                            }
                            a.registersuccesssignin{
                                text-decoration: none;
                                padding: 5% 25%;
                                background: #222;
                                border: solid 1px #222;   
                                color: rgb(230, 230, 230);
                                font-family: sans-serif;
                                font-size: 14;  
                            } 
                            a.registersuccesssignin:hover {
                                background: rgb(68, 68, 68);
                                transition: ease-in-out .5s;
                            }
                        </style>
                    </head>

                    <body>
                        <div class='registersuccess'>
                            <div class='registersuccessstatement'>
                                <p align='center' class='registersuccessstatement'>
                                    Succesfully Registered!!! 
                                </p>
                                <div align='center' class='registersuccesssignin'>
                                    <a href='login.php' class='registersuccesssignin'>Login</a>
                                </div>    
                            </div>
                        </div>
                    </body>
                </html>
            ";
		}
		else{  
            echo "<html><head><link rel='stylesheet' type='text/css' href='../styles/registerstyle.css'></head>";
            echo "There was an error!"; 
        }
	} else {
        echo "<html><head><link rel='stylesheet' type='text/css' href='../styles/registerstyle.css'></head>";
    }

	$users->close();
?>