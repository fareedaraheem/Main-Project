<?php 




function loginDataReceive($username, $password){


		
		$myUsername = $username;
		$myPassword = $password;



		if ($myUsername=="admin" && $myPassword == "admin" ) {
			
			$_SESSION['username']	= $username;
                                        		$_SESSION['uType']		=  $username;
			$_SESSION['uId']		= 1;
			$_SESSION['oID']		= $myData->oID;
			$_SESSION['userIp']		= $_SERVER['REMOTE_ADDR'];

			return 1;
			

		} else{
			
			return 2;

		}


	

}




function checkFormValidation($value){

	if ( !empty($value) ) {
		return 1;
	}

	return 0;
}






function logOut(){

	
	if ( isset( $_SESSION['username'] ) ) {
		$oid=$_SESSION['oID'];
		$nowTime = date("Y-m-d H:i:s");
        $insert  = mysql_query("INSERT INTO logouttime VALUES(
                                '',
                                '". $_SESSION['uId'] ."',
                                '$nowTime','$oid'
                        )") or die(mysql_error());



		if ( $insert ) {

			session_destroy();

			return 4;	//successfully logout
			
		}

		return 5;	//Not success
	}


}


