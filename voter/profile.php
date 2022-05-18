<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PROFILE</title>
</head>
<body class="profile" >
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "authen.php";
include "home.php";
include "database.php";
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<?php
$username = $_SESSION['SESS_NAME'];
global $username;
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You already cast a vote";
    } else {
        echo "Kindly cast your vote!";
    }
}
?>
<div style="margin-top: 340px;">
<?php
 include "footer.php" 
?>
</div>
</body>
</html>