<?php 


function getAllFromUserLoginTime()
{
	return mysql_query("SELECT * FROM logintime ORDER BY id DESC");
}



function getAllFromUserLogoutTime()
{
	return mysql_query("SELECT * FROM logout ORDER BY id DESC");
}

function addlog($type,$remarks){
	$oid=$_SESSION['oID']; 
	$ip=$_SERVER['REMOTE_ADDR'];
	$user= $_SESSION['uId'];
	$time= date("Y-m-d H:i:s");
	return mysql_query("INSERT INTO log values('NULL','$type','$user','$ip','$remarks','$time','$oid')");
}

function getOperativeLogData()
{
		$oid=$_SESSION['oID'];
	return mysql_query("SELECT i.* , o.* FROM logintime i,logouttime o WHERE i.uId=o.uId and i.oID='$oid' ORDER BY i.id DESC");
}