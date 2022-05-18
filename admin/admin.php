<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTION ADMIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="profile">
    <marquee>Welcome to our admin home page</marquee>
<?php 
if(!isset($_SESSION)) { 
    session_start();
    }
include "home.php"
?>
</body>
</html>