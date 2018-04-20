




<?php


    if(isset($_GET['rfidno']))
    {
        $rfidno=$_GET['rfidno'];
        $servername="localhost";
        $Dbusername="root";
        $Dbpassword="";
        $Dbname="RFIDGate";
        $connection=new mysqli($servername,$Dbusername,$Dbpassword,$Dbname);
       
    $sql="INSERT INTO `temptable`( `RFID`, `Time`) VALUES ('$rfidno',now())";
 
        $result=$connection->query($sql);

$sql="SELECT * FROM `entries` WHERE `RFID`='$rfidno' AND DATE(`InTime`)=CURRENT_DATE() ";
$res=$connection->query($sql);

if($res->num_rows>0)
{
$sql="UPDATE `entries` SET `OutTime`=now() WHERE `RFID`='$rfidno'  ";
    $result=$connection->query($sql);

}
else{

    $sql="INSERT INTO `entries`( `RFID`, `InTime`) VALUES ('$rfidno',now())";
    $result=$connection->query($sql);



}


    }

?>

