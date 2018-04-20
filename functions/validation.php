<?php 


function formItemValidation( $input )
{
	return filter_var($input, FILTER_SANITIZE_STRING);

}
function checkemail($mail){
	$err=TRUE;
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
		$err=FALSE;
	return $err;
 }
 
function setactiveuser($id){
	if(mysql_query("UPDATE `users` SET `uFlag` = '1' WHERE `users`.`uName` = '$id'"))
		return 1;
	return 0;
}

//check uniqueness
function verifytokenorg($oid,$toka){
	$qry = mysql_query("SELECT * FROM organisaton WHERE oid = '".$oid."' and verify ='$toka' ");
	$email='';
	if ( mysql_affected_rows() ) {
		//success
		if($row=mysql_fetch_assoc($qry)){
			$email=$row['email'];
			$date=$row['registeredOn'];
			if(strtotime($date) < strtotime("-30 minutes")) {
				//echo"time out";
				return 0;//$this_is_new = true;
			}
			$qry2="UPDATE `organisaton` SET `emailFlag` = '1' WHERE `organisaton`.`oid` = $oid";
			if(mysql_query($qry2)){
				if(setactiveuser($email))
					return 1;
				}
			}
	}
	//eroor
	return 0;
}
function checkUniqueUsername($matchingValue)
{

	$qry = mysql_query("SELECT * FROM users WHERE uName = '".$matchingValue."' and uFlag='1' ");

	if ( mysql_affected_rows() ) {
		//already used
		return 1;
	}

	//still available
	return 0;
}





//generate a unique id
function generateId()
{
	$qry = mysql_fetch_object( mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 1") );

	$newId = $qry->uId + 1;

	return $newId;
}