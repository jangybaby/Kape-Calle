<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kape Callé Company</title>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/user_location.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  
    <?php include("user_header.php");?>

    <section class="loc">
    <img src="img/location_bg.jpg" alt="Coffee Machine">
        <div class="content">
            <h2>LOCATION</h2>
            <p>Visit us for a cozy island coffee experience!</p>
            <p class="address">Purok 3Tourism Rd, General Luna, 8419 Surigao del Norte</p>
            
        </div>

        <div class="map">
            <iframe class="gps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.7775018891616!2d126.15960360000001!3d9.784884999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303f7df88d12beb%3A0x61683e9da35332c3!2sNearby%20Coffee%20Siargao!5e0!3m2!1sen!2sph!4v1714990490320!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </section>

    <?php include("User_footer.php");?>

</body>
</html>