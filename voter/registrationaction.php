<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>x</title>
</head>
<body>
<script src="valid.js"></script>

<?php
session_start();
include "database.php"; 
if(isset($_POST['submit'])) {
	
$name = mysqli_real_escape_string($con, $_POST['firstname']);
$name2 = mysqli_real_escape_string($con,$_POST['lastname']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);
$id = mysqli_real_escape_string($con,$_POST['id']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1)
		{
		$nam="<center><h4><font color='#FF0000'>This username already exists, please select another.</h4></center></font>";
		unset($username);
		include('register.php');
		exit();
		}

			$sq = mysqli_query($con, 'SELECT id FROM loginusers WHERE id="'.$_POST['id'].'"');
			$exist = mysqli_num_rows($sq);
			
						if($exist==1)
						{
						$nam="<center><h4><font color='#FF0000'>This id number already exists, please select another.</h4></center></font>";
						unset($id);
						include('register.php');
						exit();
						}

$conn = mysqli_connect('localhost','root','','government') or die ("error" . mysqli_error($conn));
$sq = mysqli_query($conn, 'SELECT ID FROM citizens WHERE ID="'.$_POST['id'].'"');
			$exist = mysqli_num_rows($sq);
			
						if($exist!=1)
						{
						$nam="<center><h4><font color='#FF0000'>This ID Number is not registered in the government registry. Enter a correct one</h4></center></font>";
						unset($id);
						include('register.php');
						exit();
						}



$sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username,id)
         VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'","'.$_POST['id'].'")');
		 if (!$sql) 
		 { 
		 die (mysqli_error($con));
		 }
$sql2 = mysqli_query($con, 'INSERT INTO loginusers(firstname,lastname,username,id,password)
         VALUES("'.$_POST['firstname'].'", "'.$_POST['lastname'].'","'.$_POST['username'].'","'.$_POST['id'].'","'.md5($_POST['password']).'")'); 
if (!$sql2) 
        { 
		 die (mysqli_error($con));
		 }
else {
echo "You have successfully registered as a voter  <a href= 'login.php'>Click here to Login and participate in the election </a>";
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Your registration was unsuccessful <br> Please try again</h4></center></font>";
     include"register.php";
}

?>

</body>
</html>