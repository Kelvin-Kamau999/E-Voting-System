<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REPORTS</title>
</head>
<body class="profile">
<?php
    if(!isset($_SESSION)) { 
        session_start();
        }
    include "home.php";
    ?>
    <center>
            <a class="home" href="../reports/president.php">PRESIDENT</a>
            <a class="home" href="../reports/gvn.php">GOVERNOR</a>
            <a class="home" href="../reports/sens.php">SENATOR</a>
            <a class="home" href="../reports/woman.php">WOMAN REP</a>
            <a class="home" href="../reports/mp.php">MP</a>
            <a class="home" href="../reports/mca.php">MCA</a>
            <marquee behavior="alternate"><p id="timer"></p></marquee>        
    </center>

    <div style="margin-top: 280px;">
 <?php include "../voter/footer.php" ?>
    </div>
</body>
</html>
