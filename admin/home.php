<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Election Portal</title>
<link rel="stylesheet" href="style.css">
<script src="timer.js"></script>
</head>

 <body>  <!-- bgcolor="green" -->
 <?php
if(!isset($_SESSION)) { 
session_start();
 }
 ?>
 <div class="logo">THE NATIONAL ELECTION COMMISSION</div>
<center>
    <div class="head" >
    <!-- <marquee>This system is created and maintained by SirKelvin</marquee> -->
        <div class="head1">
            <a class="home" href="results.php">TABLES</a>
            <a class="home" href="graphs.php">GRAPHS</a>
            <a class="home" href="reports.php">REPORTS</a>
            <a class="home" href="view.php">USERS</a>
            <a class="home" href="profile.php">PROFILE</a>
            <!-- <a class="home" href="../voter/changepassword.php">CHANGE PASSWORD</a>
            <a class="home" href="../voter/contact.php">CONTACT US</a> -->
            <a class="home" href="../voter/logout.php">LOGOUT</a>
            <a class="home" > <?php echo $_SESSION['SESS_NAME']; ?> </a>
            <marquee behavior="alternate"><p id="timer"></p></marquee>
        

        </div>
   </div>
</center> 
