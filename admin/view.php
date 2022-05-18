<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
            width: 100%;
                margin-top: 90px;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: beige;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
        .update, .delete{
        background-color: green;
        text-decoration: none;
        color: black;
        border-radius: 7px;
        border: 0;
        outline: none;
        height: 23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
        }
        .delete{
        background-color: red;
        
        }
        tr:nth-child(odd)
     {
  background-color: white;
  
     }
	</style>
</head>
<body class="profile">

<?php
if(!isset($_SESSION)) { 
    session_start();
    }

include "home.php";
include "../voter/database.php";

$query = "SELECT * FROM loginusers WHERE pid NOT IN (65) ";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);




if($total != 0){
    ?>
    <table border="3",cellspacing = "7">
     <tr>
        <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>    
        <th>National ID</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Action</th>
      </tr>    
     <?php
      while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['pid']."</td>
                <td>".$result['firstname']."</td>
                <td>".$result['lastname']."</td>
                <td>".$result['username']."</td>
                <td>".$result['id']."</td>
                <td>".$result['rank']."</td>
                <td>".$result['status']."</td>
                <td><a class='update'; href='update_data.php?pid=$result[pid]'>Update</a>
                <a class='delete'; href='delete_data.php?pid=$result[pid]' onclick = 'return checkdelete()'>Delete</a></td>
            </tr> 
             ";
      }
}
else{
    echo "<tr>
    <td>No</td>
    </tr>";
}
?>
</table>
<script>
   function checkdelete()
   {
       return confirm('Are you sure you want to DELETE this USERS record?');
   }
</script>
<?php include "../voter/footer.php"?>
</body>
</html>