<?php
include "../voter/database.php";
session_start();
if(empty($_POST['lan'])){
$error="<center><h4><font color='#FF0000'>Please select the candidates you wish to vote!</h4></center></font>";
// include"castvote.php";
exit();
}
$lan = $_POST['lan'];
$sess = $_SESSION['SESS_NAME'] ;
$lan = addslashes($_POST['lan']);
$lan = mysqli_real_escape_string($con, $lan);
$sql = mysqli_query($con, 'SELECT * FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"');
if(mysqli_num_rows($sql) > 0 ) {
	$msg="<center><h4><font color='#FF0000'>You already cast a vote. <br> You can't vote again <br> Nice time</h4></center></font>";
		// include 'castvote.php';
		exit();	
}
else{
$sql1 =mysqli_query($con, 'UPDATE president SET votecount = votecount + 1 WHERE firstname = "'.$_POST['lan'].'"');
$sql1 =mysqli_query($con, 'UPDATE gvn SET votecount = votecount + 1 WHERE firstname = "'.$_POST['gvns'].'"');
$sql1 =mysqli_query($con, 'UPDATE sen SET votecount = votecount + 1 WHERE firstname = "'.$_POST['sens'].'"');
$sql1 =mysqli_query($con, 'UPDATE woman SET votecount = votecount + 1 WHERE firstname = "'.$_POST['wom'].'"');
$sql1 =mysqli_query($con, 'UPDATE mp SET votecount = votecount + 1 WHERE firstname = "'.$_POST['mps'].'"');
$sql1 =mysqli_query($con, 'UPDATE mca SET votecount = votecount + 1 WHERE firstname = "'.$_POST['mcas'].'"');
$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE username="'.$_SESSION['SESS_NAME'].'"');
$sql3 = mysqli_query($con, 'UPDATE voters SET voted= "'.$_POST['lan'].'" WHERE username="'.$_SESSION['SESS_NAME'].'"');
	if(!$sql1 && !$sql2){
	die("Error on mysql query".mysqli_error($con));
	}
	else{
	$msg="<center><h4><font color='#FF0000'>Congrats! Your vote was submitted</h4></center></font>";
	include 'profile.php';
	exit();
	}
}
?>
