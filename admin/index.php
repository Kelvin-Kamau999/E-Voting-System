<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	// header("Location: castvote.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='black' size='15'>This system will allow voters to vote for their preffered candidates</p>
<p>In order to engage in elections you must be registered as a voter in order to login</font></legend></center>
    <p>&nbsp;&nbsp;</p>
    
<?php include "../voter/footer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
