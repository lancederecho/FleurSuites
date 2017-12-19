<?php include "../models/DBConnection.php"; ?>


<?php
	class Rooms1 extends DBConnection{
		function select_all_user(){
			$query = "SELECT * FROM user";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}
			return($result->num_rows>0)? $res: FALSE;
		}


		function insert_room($registeremail, $registerpass, $registertitle, $registerfirst, 
                $registerlast, $registergender, $birthdate, $registerline1, $registercity, $registercountry, 
				$registerline2, $registerpostalcode, $registercountrycode, $registerphonenum){
			$query = "INSERT INTO user (useremail, userpassword, usertitle, userfirstname, 
                userlastname, usergender, userbirthdate, useraddressline1, usercity, usercountry, 
				useraddressline2, userpostalcode, usercountrycode, userphonenumber)
				VALUES (\"".$registeremail."\", \"".$registerpass."\", \"".$registertitle."\", 
					\"".$registerfirst."\", \"".$registerlast."\", \"".$registergender."\", \"".$birthdate."\", 
					\"".$registerline1."\", \"".$registercity."\", \"".$registercountry."\", \"".$registerline2."\", 
					\"".$registerpostalcode."\", \"".$registercountrycode."\", \"".$registerphonenum."\")";

			$result = mysqli_query($this->conn, $query);

			return (($result)? TRUE:FALSE);

			exit;
		}

		function select_all_rooms(){
			$query = "SELECT * FROM rooms";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}
			return($result->num_rows>0)? $res: FALSE;
		}

		function select_all_history(){
			$query = "SELECT * FROM history";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}
			return($result->num_rows>0)? $res: FALSE;
		}	

		function select_all_reservations(){
			$query = "SELECT * FROM roomreserve";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}
			return($result->num_rows>0)? $res: FALSE;
		}

		function insert_roomreservation($checktime, $datereserved, $checkin, $checkout, $numofdays, $roomid, 
                $userid){
			$query = "INSERT INTO roomreserve (checktime, datereserved, checkin, checkout, numofdays, roomid, 
                userid)
				VALUES (\"".$checktime."\", \"".$datereserved."\", \"".$checkin."\", \"".$checkout."\", 
					\"".$numofdays."\", \"".$roomid."\", \"".$userid."\")";

			$result = mysqli_query($this->conn, $query);

			return (($result)? TRUE:FALSE);

			exit;
		}

		function delete_reservation($reserveid){
			$query = "DELETE FROM roomreserve WHERE reserveid = $reserveid";
			$result = mysqli_query($this->conn, $query);
			return(($result)?TRUE:FALSE);

			exit;
			
		}	

		function update_rooms($roomid, $userid) {
			$query = "UPDATE rooms SET
					userid =\"".$userid."\"WHERE roomid = \"".$roomid."\" ";

			$result = mysqli_query($this->conn,$query);
			return(($result)?TRUE:FALSE);

			if(!$result)
			{
				echo 'Data Not Updated';
			}
		}

		function update_admin($Member_num,$Tin,$FirstName,$LastName,$Email,$Username,$MobileNum,$Password) {
			   	$query = "UPDATE admin SET 
			   			Tin =\"".$Tin."\",
						FirstName =\"".$FirstName."\",
						LastName =\"".$LastName."\",
						Email =\"".$Email."\",
						Username =\"".$Username."\",
						MobileNum =\"".$MobileNum."\",
						Password =\"".$Password."\"
						WHERE Member_num = \"".$Member_num."\" ";

			  	$result = mysqli_query($this->conn,$query);
		 		return(($result)?TRUE:FALSE);

			   if(!$result)
			   {
			       echo 'Data Not Updated';
			   }
		}

		function delete_admin($Member_num){
			$query = "DELETE FROM admin WHERE Member_num=$Member_num";
			$result = mysqli_query($this->conn, $query);
			return(($result)?TRUE:FALSE);

			exit;
			
		}	

		function insert_product($ProductName, $Price) {
			$query = "INSERT INTO products(ProductName, Price) VALUES(\"".$ProductName."\",\"".$Price."\")";

			$result = mysqli_query($this->conn, $query);

			return (($result)? TRUE:FALSE);

			exit;
		}

		function select_all_products(){
			$query = "SELECT * FROM products";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}		

			return($result->num_rows>0)? $res: FALSE;
			// if($result['num_rows'] > 0 ){
				// return $result->fetch_object();
			// }
			// else{
				// return FALSE;
			// }

		}

		function update_products($ProductNum, $ProductName, $Price) {
			   	$query = "UPDATE products SET ProductName =\"".$ProductName."\",
						Price =\"".$Price."\"WHERE ProductNum = \"".$ProductNum."\" ";

			  	$result = mysqli_query($this->conn,$query);
		 		return(($result)?TRUE:FALSE);

			   if(!$result)
			   {
			       echo 'Data Not Updated';
			   }
		}

		function delete_product($ProductNum){
			$query = "DELETE FROM products WHERE ProductNum=$ProductNum";
			$result = mysqli_query($this->conn, $query);
			return(($result)?TRUE:FALSE);

			exit;
			
		}


		function select_all_purchases(){
			$query = "SELECT * FROM purchase";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}		

			return($result->num_rows>0)? $res: FALSE;
			// if($result['num_rows'] > 0 ){
				// return $result->fetch_object();
			// }
			// else{
				// return FALSE;
			// }

		}
		function insert_toPurchase($ProductNum, $ProductName, $Quantity, $Price, $Total) {
			$Quantity = 1;
			$Total = $Price;
			$query = "INSERT INTO purchase (ProductNum, ProductName, Quantity, Price, Total) VALUES(\"".$ProductNum."\",\"".$ProductName."\",\"".$Quantity."\",\"".$Price."\",\"".$Total."\")";
			$result = mysqli_query($this->conn, $query);
			
			return (($result)? TRUE:FALSE);

			exit;
		}

		function update_purchase($ProductNum, $Quantity, $Price ,$Total) {

		   	$query = "UPDATE purchase SET Quantity =\"".$Quantity."\", Price = \"".$Price."\", Total = \"".$Total."\"
		   	WHERE ProductNum = \"".$ProductNum."\" ";

		  	$result = mysqli_query($this->conn,$query);
	 		return(($result)?TRUE:FALSE);

		   if(!$result)
		   {
		       echo 'Data Not Updated';
		   }
		}

		function delete_purchase($ProductNum){
			$query = "DELETE FROM purchase WHERE ProductNum=$ProductNum";
			$result = mysqli_query($this->conn, $query);
			return(($result)?TRUE:FALSE);

			exit;
			
		}


		function insert_toTransaction($SubTotal, $Cash, $Total, $CashChange) {
			$query = "INSERT INTO transaction (SubTotal, Cash, Total, CashChange) VALUES(\"".$SubTotal."\",\"".$Cash."\",\"".$Total."\",\"".$CashChange."\")";
			$result = mysqli_query($this->conn, $query);
			
			return (($result)? TRUE:FALSE);

			exit;

		}

		function select_Transaction() {
			$query = "SELECT * FROM transaction";
			$result = mysqli_query($this->conn, $query);			
			
			$res = array();
			while($rows = mysqli_fetch_array($result)){
				
				array_push($res, $rows);
			}		

			return($result->num_rows>0)? $res: FALSE;

			exit;

		}

		function void_purchase(){
			$query = "TRUNCATE TABLE purchase";
			$result = mysqli_query($this->conn, $query);
			return(($result)?TRUE:FALSE);

			exit;
			
		}



	}

?>