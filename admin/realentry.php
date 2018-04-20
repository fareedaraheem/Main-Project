

<?php

include './sidenavigationbar.php';
?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Real-Time Vehicle Entry</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Real-Time Vehicle Entry</h5>
        </div>
        <div class="widget-content nopadding">
          <form  method="POST" class="form-horizontal">
           
               <div class="control-group">
             
              
              
              
                 
  <?php
  
//  include '../functions/database.php';
//echo "
//    
//    <script type='text/javascript'> function fn60sec() {
//  window.location.href='realentry.php'
//    
//      
//    // runs every 60 sec and runs on init.
//}
//
//setInterval(fn60sec, 5*1000); </script> ";
//
//
//
//    
//    
//    
//    $sql="SELECT  `RFID` FROM `TempTable`   ORDER BY  `id` DESC LIMIT 1";
//     
//       $res=$conn->query($sql);
//         if($res->num_rows>0)
//   {
//       while ($row=$res->fetch_assoc())
//       {
//          $uid=$row['RFID'] ;
//          echo json_encode(array("userid"=>$uid));
//       }
//   }
// else {
//   echo json_encode(array("userid"=>'failed'));
//   }
//    
//    
// // some action goes here under php
// 



  ?>
              
<!--          </form>-->
  
<?php
include '../functions/database.php';

  
    echo "
    
    <script type='text/javascript'> function fn60sec() {
  window.location.href='realentry.php'
    
      
    // runs every 60 sec and runs on init.
}

setInterval(fn60sec, 3*1000); </script> ";
    
    $sql="SELECT  `pic`, `name`, `branch`,Time, `address`, `mob`, `vehicleNo`, `RFIDNo` FROM `faculty` JOIN TempTable ON TempTable.RFID=faculty.RFIDNo ORDER BY  TempTable.`id` DESC LIMIT 1";
     
       $res=$conn->query($sql);
         if($res->num_rows>0)
   {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        $pic=  $row["pic"];
       $CardHolderName=  $row["name"];
       $Addr=  $row["address"];
       $branch=  $row["branch"];
       $vehicleNo=  $row["vehicleNo"];
       $Mobile=  $row["mob"];
      
       $RFID_Crd_No=  $row["RFIDNo"];
   
       
         $Time=  $row["Time"];
       
       echo " 
 <div class='control-group'>
              <label class='control-label'>Entered On:</label>
              <div class='controls'>
                  
                  
           $Time </td>
              </div>
              


         <div class='control-group'>
              <label class='control-label'>Picture:</label>
              <div class='controls'>
                  
                  
             <img src='./$pic' height='250' width='250'/> </td>
              </div>
              
<div class='control-group'>
              <label class='control-label'>Full Name :</label>
              <div class='controls'>
                  
                  
                  
                <input type='text' class='span11' placeholder='Full Name' name='name' value='$CardHolderName'/>
              </div>
            </div>
             <div class='control-group'>
              <label class='control-label'>Address</label>
              <div class='controls'>
                <textarea class='span11' name='addr' >$Addr</textarea>
              </div>
            </div>
           
                          <div class='control-group'>
              <label class='control-label'>Branch </label>
              <div class='controls'>
                <input type='text' name='dob'  class='span11'  value='$branch' >
                </div>
            </div>
              
            <div class='control-group'>
              <label class='control-label'>Mobile Number</label>
              <div class='controls'>
                <input type='text'  class='span11' placeholder='Mobile Number' name='mob' value='$Mobile' />
              </div>
            </div>
           
              
                 
              
                    <div class='control-group'>
              <label class='control-label'>Vehicle Number</label>
              <div class='controls'>
                <input type='text'  class='span11' placeholder='Annual Income' name='income' value='$vehicleNo' />
              </div>
            </div>
            </div>
               <div class='control-group'>
              <label class='control-label'>RFID Card Number</label>
              <div class='controls'>
                <input type='text'  class='span11' placeholder='RFID Card Number' name='rfid' value='$RFID_Crd_No'/>
              </div>
            </div>
              
                 
            



         ";
     
       
       
   
       }
} else {
    echo "No VEHICLE Found";
}
$conn->close();
    


?>



         
          </form>
        </div>
      </div>
  

  </div>

  </div></div> </div>

<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 

</body>
</html>

  
 

