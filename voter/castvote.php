<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="timer.js"></script>
    <style>
 .button{
  height:30px; 
width:150px; 
margin-top:100px;
font-size: x-large;
}
.button:hover{
  cursor: pointer;
  background-color: black;
  color: white;
}
     
    </style>
</head>
<body class="profile">

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "authen.php";
include "home.php"; 
?>
<form action="tallyvote.php" name="vote" method="post" id="myform" >
<center><p id="timer"></p></center>
<main>
    <section class="house-grid1">
  
       <div class="form_card">
       <center><h1 class="posts">President</h1></center>
          <div class="house-grid">
            
                  <tr><input type="radio" name="lan" value="Peter Davis">Peter Davis</tr>
                  <tr><input type="radio" name="lan" value="Grace Janet">Grace Janet</tr>
                  <tr><input type="radio" name="lan" value="Joe Gates">Joe Gates</tr>
                  <tr><input type="radio" name="lan" value="Patience Harris">Patience Harris</tr>
                  <tr><input type="radio" name="lan" value="Jeff Kennedy">Jeff Kennedy</tr>
            
         </div>
      </div>

          <div class="form_card">
          <center><h1  class="posts">Governor</h1></center>
             <div class="house-grid">
                    <input type="radio" name="gvns" value="Elon Musk">Elon Musk<br>
                    <input type="radio" name="gvns" value="Kelvin Kamau">Kelvin Kamau<br>
                    <input type="radio" name="gvns" value="David Peace">David Peace<br>
                    <input type="radio" name="gvns" value="Hertha Benz">Hertha Benz<br>
                    <input type="radio" name="gvns" value="John Poor">John Poor<br>
              </div>
          </div>
 


          <div class="form_card">
          <center><h1 class="posts">Senator</h1></center>
            <div class="house-grid">
                      <input type="radio" name="sens" value="Mercy Poet">Mercy Poet<br>
                      <input type="radio" name="sens" value="Vincent Mwanzia">Vincent Mwanzia<br>
                      <input type="radio" name="sens" value="Thomas Denmark">Thomas Denmark<br>
                      <input type="radio" name="sens" value="Judas Iscariot">Judas Iscariot<br>
                      <input type="radio" name="sens" value="William Spirit">William Spirit<br>
            </div>
          </div>



          <div class="form_card">
          <center><h1 class="posts">Woman Representative</h1></center>
            <div class="house-grid">
                <input type="radio" name="wom" value="Sabina Love">Sabina Love<br>
                <input type="radio" name="wom" value="Mary Light">Mary Light<br>
                <input type="radio" name="wom" value="Lady Betty ">Lady Betty <br>
                <input type="radio" name="wom" value="Mishi Mboko">Mishi Mboko<br>
                <input type="radio" name="wom" value="Esther Roads">Esther Roads<br>
            </div>
          </div>


          <div class="form_card">
          <center><h1 class="posts">Member Of Parliament</h1></center>
            <div class="house-grid">
                  <input type="radio" name="mps" value="Stephen Pirate">Stephen Pirate<br>
                  <input type="radio" name="mps" value="Alice Keys">Alice Keys<br>
                  <input type="radio" name="mps" value="James Teacher">James Teacher<br>
                  <input type="radio" name="mps" value="Oscar Harp">Oscar Harp<br>
                  <input type="radio" name="mps" value="Nick Pope">Nick Pope<br>
            </div>
          </div>



          <div class="form_card">
          <center><h1 class="posts">Member Of County Assembly</h1></center>;
            <div class="house-grid">
                  <input type="radio" name="mcas" value="Pierre Auba">Pierre Auba<br>
                  <input type="radio" name="mcas" value="Mohammed Salah">Mohammed Salah<br>
                  <input type="radio" name="mcas" value="Sadio Mane">Sadio Mane<br>
                  <input type="radio" name="mcas" value="Bobby Firmino">Bobby Firmino<br>
                  <input type="radio" name="mcas" value="Diogo Jota">Diogo Jota<br>
            </div>
           </div>
      </section>
</main>


<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>

<center><input type="submit" value="Submit Vote" name="submit" class="button" /></center>
</form>
    
<?php include "footer.php" ?>
</body>
</html>