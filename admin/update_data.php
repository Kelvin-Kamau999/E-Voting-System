<?php
if(!isset($_SESSION)) { 
    session_start();
    }
require '../voter/database.php';
include 'home.php';
$pid = $_GET['pid'];
$query = "SELECT * FROM loginusers WHERE pid = '$pid' ";

$data = mysqli_query($con,$query);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if(isset($_POST["update"])){
     $pid = $_POST['pid'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $username = $_POST['username'];
     $id = $_POST['id'];
     $rank = $_POST['rank'];
     $status = $_POST['status'];

 $query = "UPDATE loginusers set pid = '$pid',firstname= '$firstname',lastname='$lastname',username='$username',id='$id',rank='$rank',status='$status' WHERE pid = $pid";

 $data = mysqli_query($con,$query);
 if($data)
 {
    
     echo
      "
      <script>
        alert('Data updated successfully');
        document.location.href = 'view.php';
      </script>
      ";
      
 }
 else{
     echo "Update  failed";
 }
   
   }
 
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/register.css">
    <style>
        .input-group{
            width: 100%;
            margin-top: 10px;
        }
    </style>
	<title>Update Details</title>
</head>
<body>
	<center>
	<div class="container" style="margin-top: 20px;">
	<div class="form1">
		<form action="" method="POST" autocomplete="off" enctype="multipart/form-data" class="login-email">

            <div class="input-group">
                    USER ID: <input value="<?php echo $result['pid'];?>"  list="type" name="pid" placeholder="number" required>   
            </div>

            <div class="input-group">
				    FIRST NAME: <input value="<?php echo $result['firstname'];?>"  type="text" placeholder="Kelvin" name="firstname"  required>
			  </div>

            <div class="input-group">
                    LAST NAME:<input value="<?php echo $result['lastname'];?>"  type="text" placeholder="kamau" name="lastname"  required>
            </div>

           <div class="input-group">
			    	USERNAME:<input value="<?php echo $result['username'];?>"  type="text" placeholder="voter11" name="username"  required>
		  	</div>

			<div class="input-group">
				  NATIONAL ID NUMBER:<input value="<?php echo $result['id'];?>"  type="text" placeholder="123456" name="id" required>
			</div>

            <div class="input-group">
			    	USER ROLE:<input value="<?php echo $result['rank'];?>"  type="text" placeholder="rank" name="rank" required>
			  </div>

            <div class="input-group">
                    STATUS:<input value="<?php echo $result['status'];?>"  list="stats" name="status" placeholder="activeness" required>
            </div>

            <div class="input-group">
			        <button name="update" class="btn">Update</button>
	        </div>
		</form>
		</div>
	</div>
	</center>
</body>
</html>