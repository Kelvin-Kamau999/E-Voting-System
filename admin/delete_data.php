<?php
include "../voter/database.php";
$pid = $_GET['pid'];

$query = "DELETE FROM loginusers WHERE loginusers.pid = '$pid' ";
$data = mysqli_query($con,$query);

if($data){
    echo
    "
    <script>
      alert('Deleted successfully');
      document.location.href = 'view.php';
    </script>
    ";
     
}
else{
    echo "failed!";
}
?>