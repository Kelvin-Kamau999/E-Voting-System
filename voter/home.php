<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Election Portal</title>
<link rel="stylesheet" href="style.css">
</head>

 <body class="profile"> 
 <?php if(!isset($_SESSION)) { 
session_start();
 }
?>
 <div class="logo">THE NATIONAL ELECTION COMMISSION</div>
<center>
    <div class="head" >

        <div class="head1">
            <a class="home" href="castvote.php">VOTE HERE</a>
            <a class="home" href="profile.php">PROFILE</a>
            <a class="home" href="changepassword.php">CHANGE PASSWORD</a>
            <a class="home" href="contact.php">CONTACT US</a>
            <a class="home" href="logout.php">LOGOUT</a>
            <a class="home" > <?php echo  $_SESSION['SESS_NAME']; ?> </a>
        

        </div>
   </div>
</center> 