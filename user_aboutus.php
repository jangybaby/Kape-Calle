<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kape Callé Company</title>
    <link rel="stylesheet" href="css/user_aboutus.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  
    <?php include("user_header.php");?>

    <section class="aboutus">
        <img src="img/about_bg.jpg" alt="Coffee Machine">

    <div class="container1">
        <h2>Our Story</h2>
        <p>
            Welcome to Kape Callé, your local Café sanctuary. We're proud to be more than simply a Café shop;
            we're a community hub where people come to relax, enjoy delicious brews, indulge in delicious sandwiches,
            and create connections that last. Kape Callé is located in the center of our neighborhood and embodies
            leisure and friendship. Kape Callé extends a warm welcome to you to immerse yourself in the best Café
            culture, whether you're looking for a quiet place to sip your morning coffee or a friendly conversation space with friends.
        </p>
        <p> <i>
            "A revolutionary street cafe that provides a meticulously
            developed products of premium and specialty coffee
            and tea variants for all levels of caffeine enthusiasts."
        </i></p>
    </div>


    <div class="container2">
      <img class="coffeeimage" src="img/pic23.webp" alt="coffegrounds">
        <h2>Our Coffee</h2>
        <p>
            At our core, we're passionate about coffee. From the farmers who nurture the cherries, to our master
            roasters coaxing out the finest flavors, and our dedicated baristas who serve each cup with care, we're
            committed to crafting the perfect coffee experience for you.
        </p>
        <a href="https://www.facebook.com/nearbycoffee.iao" target="_blank" rel="noopener noreferrer"><button class="learn-more-btn">Learn More</button></a>
    </div>

    </section>
    
    <?php include("User_footer.php");?>

</body>
</html>