<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="profile">
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "authen.php";
 include "home.php"; 
?>
<br>
<br>
<center><h3>Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<center>
    <form action="changepasswordaction.php" method="post" id="myform">
        Current Password :
        <input type="password" name="cpassword" value="" >
        <br>
        <br>
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

<script type="text/javascript">
    var frmvalidator = new Validator("myform"); 
        frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
        frmvalidator.addValidation("cpassword","maxlen=50");
        frmvalidator.addValidation("npassword","req","Please enter New Password"); 
        frmvalidator.addValidation("npassword","maxlen=50");
        frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
        frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<?php include "footer.php";?>

</body>
</html>

