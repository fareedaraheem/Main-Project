<?php 



function getAllStudents()
{
	$oid=$_SESSION['oID'];
	return mysql_query("SELECT * FROM student where `ActiveFlag` = 1  ORDER BY `AutoId` DESC ");
}
function getAllStudentsfromqury($qry)
{
	$oid=$_SESSION['oID'];
	return mysql_query("SELECT * FROM student where (Name like '$qry%' or AutoId like '$qry%' or EmailID like '%qry%' or Mobile like '%qry%') and `ActiveFlag`=1 ");
}

function getAllSlabs(){
	
	return mysql_query("SELECT * FROM taxSlabs");
}

function getStudentNameById($id){
	$oid=$_SESSION['oID'];
	return mysql_fetch_object(mysql_query("SELECT * FROM student WHERE AutoId = '$id' and `ActiveFlag`=1 "));

}



