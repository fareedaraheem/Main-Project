

<?php

include './sidenavigationbar.php';
?>


<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Daily Entry Log</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Entry-View</h5>
        </div>
        <div class="widget-content nopadding">
          <form  method="POST" class="form-horizontal">
       
                  <div class="control-group">
              <label class="control-label">Select Date</label>
              <div class="controls">
                  <input type="date" name="dates" />
              </div>
            </div>
              
                   
              
                    
         
            <div class="form-actions">
                <button type="submit" class="btn btn-success" name="view">View </button>
            </div>
          </form>
        </div>
      </div>
  

  </div>

</div></div>

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

<?php
include './../functions/database.php';
if(isset($_POST['view']))
{
  
    $dates=$_POST['dates'];
 
    $sql="SELECT  `pic`, `name`, `branch`, `address`, `mob`, `vehicleNo`, `RFIDNo`,entries.`InTime`,entries.OutTime  FROM `faculty` join Entries ON Entries.RFID=faculty.RFIDNo WHERE date(Entries.InTime)='$dates'";
    //echo $sql;
    $result= $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'> <thead><tr> <th> Image </th> <th> Name</th> <th> Mobile</th><th> Branch </th> <th> Vehicle Number </th> <th> In Time </th> <th> Out Time </th></thead> </tr> <tbody>";
        while ($row=$result->fetch_assoc())
        {
            $pic=$row['pic'];
            $name=$row['name'];
            $branch=$row['branch'];
              $mob=$row['mob'];
               $vehicleNo=$row['vehicleNo'];
               $inTime=$row['InTime'];
               $OutTime=$row['OutTime'];


     
            echo "<tr> <td>    <center>  <img src='./$pic' height='150' width='100'/> </center> </td> </td>  <td> <center> $name  </center></td><td>  <center> $mob  </center> </td> <td> <center> $branch  </center>  </td> <td> <center> $vehicleNo  </center>   </td> <td> <center> $inTime </center> </td> <td> <center> $OutTime</center> </td></tr>";
            
        }
        echo "</tbody></table>";
    } 
 else {
        echo 'No  details Available';    
    }
    
    
}
?>




