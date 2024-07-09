<?php 
 session_start();
 if(!$_SESSION['user_type']){
     header("Location: login.php");
     exit;
 }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>My Portfolio</title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body background="backgroundimg.jpg" class="bodyimg">
        <a href="logout.php">
          <button class="logout">Logout</button>
        </a>
    </body>

</html>