<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	
<?php 
//check if user is admin o voter
include "header.php"; 
 $host="localhost";
 $user="root";
 $password="";
 $db="kelvin";

 $data=mysqli_connect($host,$user,$password,$db);

//create login page
if(!isset($_SESSION)) { 
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: cast vote.php");
}
?>
<br>
<center>

<legend> <h3>Login to vote </h3></legend> 
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<center>
<form action="loginaction.php" method="post" id="myform" class="form_card">
	
	<input type="text" class="form_input" name="username" placeholder="Username" value="" > 
	<input type="password" class="form_input" name="password" placeholder="password" value="" >
	
		<!-- <input type="submit" name="login" value="login" >  -->
    <button name="login" type="submit">login</button>
	<div>
		<p> Don't have an account <a href="register.php">Register here</a> </p>
	</div>
	<div>
		<p>  <a href="update.php">forgot password</a> </p>
	</div>
			
</form>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
<div style="margin-top: 50px;" >
<?php include "footer.php"; ?>
</div>
</body>
</html>