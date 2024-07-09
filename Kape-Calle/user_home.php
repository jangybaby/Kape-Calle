<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kape Callé Company</title>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>

<body>
  
  <?php include("user_header.php");?>

  <section class="hero-section">
    <div class="content"> 
        <img src="img/background.jpg" alt="Coffee Machine">
          <a href="user_menu.php"><button class="order">Order Now</button></a>
        </div>
      <div class="transition"></div>
  </section>

  <section class="info-section">
</section>

<?php include("user_footer.php");?>
</body>