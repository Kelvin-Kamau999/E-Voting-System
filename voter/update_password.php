<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 
    session_start();
    
global $error; echo $error;

include "database.php"; 
if(isset($_POST['cpass'])) {
	$newpass = md5($_POST['npassword']);
	$cnewpass = md5($_POST['cnpassword']);
	$newpass = addslashes($newpass);
	$cnewpass = addslashes($cnewpass); 
	$newpass = mysqli_real_escape_string($con, $newpass);
	$cnewpass = mysqli_real_escape_string($con, $cnewpass);
	
 if ( $newpass == $cnewpass){
$sql1 = mysqli_query($con, 'UPDATE loginusers SET password="'. md5($_POST['npassword']).'" WHERE username="$name3" ');
$error = "<center><h4><font color='green'>Password successfully changed!</h4></center></font>";
// include ("login.php");
}
else {
	$error = "<center><h4><font color='#FF0000'>New Password and Confirm Password does not match!</h4></center></font>";
	include ("update_password.php");
}
}
?>                  

<center>
    <form action="update_password.php" method="post" id="myform">
        New Password:
        <input type="password" name="npassword" value="" >
        <br>
        <br>
        Confirm New Password:
        <input type="password" name="cnpassword" value="" >
        <br>
        <br>
        <input type="submit" name="cpass" value="UPDATE" >
    </form>
</center>
 
</body>
</html>