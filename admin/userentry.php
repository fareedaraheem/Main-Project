<?php
session_start();
include './../functions/database.php';

function prepare_input($string) {
    return trim(addslashes($string));
}

if(isset($_POST['but']))
{
    $CardHolderName=$_POST['name'];
        $Address=$_POST['addr'];
       
     
            $Mobile=$_POST['mob'];
            
            $branch=$_POST['branch'];
       
            $vehicle=$_POST['vehicle'];
            
             $RFID_Crd_No=$_POST['rfid'];
   
               
               
               echo" now()";
               echo "<script>console.log(now());</script>";
               
            echo   $img_file = $_FILES["img_file"]["name"];
	$folderName = "images/";
	$validExt = array("jpg", "png", "jpeg", "bmp", "gif");
	
	if ($img_file == "") {
		//$msg = errorMessage( "Attach an image");
	} elseif ($_FILES["img_file"]["size"] <= 0 ) {
		//$msg = errorMessage( "Image is not proper.");
	} else {
		$ext = strtolower(end(explode(".", $img_file)));
		
		if ( !in_array($ext, $validExt) )  {
			//$msg = errorMessage( "Not a valid image file");
		} else {
                    $Fname=rand(10000, 990000). '_'.'.'.$ext;
			$filePath = $folderName.$Fname;
			
			if ( move_uploaded_file( $_FILES["img_file"]["tmp_name"], $filePath)) {
                           $newfile= $firstname = mysqli_real_escape_string($conn, $filePath);
                            
                            $sql = "INSERT INTO `faculty`( `name`, `pic`, `address`, `branch`, `mob`, `vehicleNo`, `RFIDNo`) "
        . "values ('$CardHolderName','$filePath','$Address','$branch','$Mobile','$vehicle','$RFID_Crd_No')";

if ($conn->query($sql) === TRUE) {
   // $_SESSION['ration_no']=$RationCardNo;
    echo "<script type='text/javascript'> alert('New User created successfully') </script>";
} else {
    echo  $sql ;
      echo  $sql ;
     $r="Error: " . $sql . "<br>" . $conn->error;
     echo $r;
     echo "<script type='text/javascript'>alert($r) </script>";
}

$conn->close();
                            
                            
//				$sql = "INSERT INTO tbl_demo5 VALUES (NULL, '".prepare_input($filePath) ."')";
//				
//				$msg = ( mysql_query($sql))  ? successMessage("Uploaded and saved to database.") : errorMessage( "Problem in saving to database");
//				
			} else {
//				$msg = errorMessage( "Problem in uploading file");
			}
			
		}
	}
               
               
               ////
               
               
              
             
    
   

}



?>


<?php

include './sidenavigationbar.php';


?>


<br>
<br>
<br>
<br>


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Faculty Entry</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
          
<!--            <form method="post" action="" name="f" enctype="multipart/form-data" onSubmit="return validateImage();" >-->
      
<!--      </form>-->
          
        <div class="widget-content nopadding">
          <form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <table id="tableForm" style="width:50%; margin:0 auto;border:1px solid #000;" cellpadding="5" >
          <tr>
            <td valign="top">Upload Image File: </td>
            <td valign="top"><input type="file" name="img_file" id="img_file" />
            <br>
<!--            Only jpg, jpeg, png, gif, bmp files allowed-->
            </td>
          </tr>
<!--          <tr>
            <td></td>
            <td><input type="submit" class="submit_button" value="Submit" name="s">
            </td>
          </tr>-->
        </table>
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                  <input type="text" class="span11" placeholder="Full Name" name="name" required/>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Address</label>
              <div class="controls">
                <textarea class="span11" name="addr" required></textarea>
              </div>
            </div>
           
                
              
            <div class="control-group">
              <label class="control-label">Mobile Number</label>
              <div class="controls">
                  <input type="text" class="span11" placeholder="Mobile Number" name="mob" required pattern="[789][0-9]{9}"  />
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">RFID NUMBER :</label>
              <div class="controls">
                  <input type="text"  class="span11" placeholder="RFID Number " name="rfid"     />
             
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">VEHICLE NUMBER :</label>
              <div class="controls">
                  <input type="text"  class="span11" placeholder="VEHICLE Number " name="vehicle"     />
             
              </div>
            </div>
              
                 <div class="control-group">
              <label class="control-label">Branch</label>
              <div class="controls">
                <select name="branch" >
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                     <option value="EEE">ECE</option>
                      <option value="EEE">CE</option>
                       <option value="EEE">ME<option>
               
                </select>
              </div>
            </div>
              
         
            <div class="form-actions">
                <button type="submit" class="btn btn-success" name="but">Save and Add Members</button>
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
