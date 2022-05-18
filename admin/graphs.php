<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>GRAPHS</title>
</head>
<body class="profile">
    <?php
    if(!isset($_SESSION)) { 
        session_start();
        }
    include "home.php";
    ?>

<center>
   
            <a class="home" href="../graphs/pres_charts.php">PRESIDENT</a>
            <a class="home" href="../graphs/gvn_charts.php">GOVERNOR</a>
            <a class="home" href="../graphs/sen_charts.php">SENATOR</a>
            <a class="home" href="../graphs/wom_charts.php">WOMAN REP</a>
            <a class="home" href="../graphs/mp_charts.php">MP</a>
            <a class="home" href="../graphs/mca_charts.php">MCA</a>
            <marquee behavior="alternate"><p id="timer"></p></marquee>        
</center> 

<div style="margin-top: 280px;"></div>
 <?php include "../voter/footer.php" 
?>
</body>
</html>