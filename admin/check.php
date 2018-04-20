<?php
   include '../functions/database.php';




    
    
    
    $sql="SELECT  `RFID` FROM `TempTable`   ORDER BY  `id` DESC LIMIT 1";
     
       $res=$conn->query($sql);
         if($res->num_rows>0)
   {
       while ($row=$res->fetch_assoc())
       {
          $uid=$row['RFID'] ;
          echo json_encode(array("userid"=>$uid));
       }
   }
 else {
   echo json_encode(array("userid"=>'failed'));
   }
    
    
 // some action goes here under php
 



?>
