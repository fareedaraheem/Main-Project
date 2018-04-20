<?php 
    //autoload
    session_start();
   // include('autoloadfunctions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>RFID Gate  System</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="logincss/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="logincss/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
<!--			<h1 id="title" class="hidden"><span id="logo">Sarto <span>LogIn</span></span></h1>-->
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Administrator</h2>
			</div>
                    <form method="GET"> 
			<label for="username">Username</label>
			<br/>
                        <input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
                        <input type="password" id="password" name="password">
			<br/>
                        <button type="submit" name="submit">Sign In</button>
			<br/>
                

		</form> 
                </div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
<?php
if(isset($_GET['submit']))
{
    $username=$_GET['username'];
    $password=$_GET['password'];
    
   
    if($username=='admin'&&$password=='admin')
    {
        echo header('location:/rfidgate/admin/userentry.php');
    }
 else {
           echo "<script type='text/javascript'>alert('Invalid Username Or Password')</script>";  

    }
}
?>