<?php 
    if(!isset($_SESSION)) { 
        session_start();
        }
global $error; 
echo $error;

include "database.php"; 
if(isset($_POST['cpass'])) {
    $name3 = $GET['username'];
	$id = $GET['id'];
    $name3 = addslashes($name3);
	$id = addslashes($id);
    $name3 = mysqli_real_escape_string($con, $name3);
	$id = mysqli_real_escape_string($con, $id);


    $sql =  mysqli_query($con, 'SELECT id FROM loginusers WHERE username= "'.$_POST['username'].'" ');
$row = mysqli_fetch_assoc($sql);
$pass = $row['id'];
if ($id != $pass) {
	$error = "<center><h4><font color='#FF0000'>Incorrect User ID Number!</h4></center></font>";
	include ("update.php");
}
// else
// $sql =  mysqli_query($con, 'SELECT username FROM loginusers WHERE id="'.$_POST['id'].'" ');
// $row = mysqli_fetch_assoc($sql);
// $passi = $row['username'];
// if ($name3 != $passi) {
// 	$error = "<center><h4><font color='#FF0000'>Incorrect Username!</h4></center></font>";
// 	include ("update.php");
// }
// }
else {        
    
	include ("update_password.php");    
}
}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="" method="post" id="myform">
    Username: 
					<input type="text" name="username" placeholder="voter11" id="username" >
					<br>
					<br>
					

	ID Number: 
					<input type="number" name="id" placeholder="123456789" id="id" >
					<br>
					<br>
        <input type="submit" name="cpass" value="Check" >
    </form>
</center>

</body>
</html>