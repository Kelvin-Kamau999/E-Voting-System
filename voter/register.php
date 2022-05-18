<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: castvote.php");
}
?>
<br>
<br><center>
<legend> <h3 style="margin-top: 0px;"> Register here </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >


<form class="form_card" action= "registrationaction.php" method= "post" id="signup" >

					<input type="text" class="form_input" name="firstname" placeholder="firstname" id="firstname" style="margin-top: 20px;" />
			
					<!-- <small style="color: #6c5ce7;font-size:large" ></small> -->

					<input type="text" class="form_input" name="lastname" placeholder="lastname" id="lastname" />
					<input type="text" class="form_input"  name="username" placeholder="Username" id="username" >
					<input type="number" class="form_input" name="id" placeholder="National id" id="id" >
					<input type="password" class="form_input" name="password" placeholder="password" id="password" >
				

					<!-- Repeat Password:
					<input type="password" placeholder="******" id="cpassword">
					<small style="color: #6c5ce7;font-size:large" ></small> -->

						<!--  -->
					<p>By creating an account you agree to our <a href="">Terms & Conditions</a>.</p>

			<div>
			     <p> Already have an account<a href="login.php">Login here</a> </p>
			</div>
					<div >
						<button type="submit" name="submit">REGISTER</button>
						<button type="reset" name="Clear">CLEAR</button>
						<!-- <input type="submit" name="submit" value="REGISTER" />
						<input type="reset" name="Clear" value="CLEAR" style="margin-bottom: 20px;"/> -->
					</div>
					
</form>
</font>
</center>

  <!-- <script type= "text/javascript" >
 var frmvalidator = new Validator("signup"); 
 frmvalidator.addValidation("firstname","req","Please enter voter firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter voter lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter voter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter voter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

 </script>  -->
<?php include "footer.php" ;?>

</body>
</html>