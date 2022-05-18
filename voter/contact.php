 <?php
 if(!isset($_SESSION)) { 
    session_start();
    }
// include "home.php"
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
     <link rel="stylesheet" href="contact.css">
     <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body class="profile">

<?php include "home.php"?>

    <section id="Contact">
        <div class="container">
            <h3>Contact Us</h3>
            <p>
                Please send any comments, feedback or queries in the form below
            </p>
            <form action="https://formspree.io/f/mgedzqwl" method="POST">
            <fieldset>
                <input type="text" name="name" placeholder="Enter your name" id="">
                <input type="email" name="_replyto" placeholder="Enter your email" id="">
                <textarea name="message" id="" placeholder="Enter message" cols="10" rows="10"></textarea>
                <button>Send</button>
                <input type="hidden" name="_confirmation" value="Thank you for contacting Us!">
            </fieldset>
            </form>
        </div>

    </section>
    <div style="margin-top: 50px;">
<?php include "footer.php";?>
</div>
</body>
</html>