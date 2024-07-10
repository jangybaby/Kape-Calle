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
    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
        }
    </style>
</head>

<body>

    <?php include("user_header.php");?>

    <section class="aboutus">
        <img src="img/about_bg.jpg" alt="Coffee Machine">

        <div class="container1 fade-in">
            <h2>About Us</h2>
            <p>
                Welcome to Kape Callé, your local Café sanctuary. We're proud to be more than simply a Café shop. Kape Callé
                 is a café that delights customers with enjoyable and mouth-watering food in every bite. The café focuses on 
                 serving affordable and budget-friendly snacks and drinks, whether coffee or non-coffee.
                we're a community hub where people come to relax, enjoy delicious brews, indulge in delicious sandwiches,
                and create connections that last. Kape Callé extends a warm welcome to you to immerse yourself in the best Café
                culture.
            </p>
            <p><i>
                "A revolutionary street cafe that provides a meticulously
                developed products of premium and specialty coffee
                and tea variants for all levels of caffeine enthusiasts."
            </i></p>
        </div>

        <div class="container0 fade-in">
            <h2>Background and History</h2>
            <p>
                On June 8, 2023, nestled among the lush greenery of Tabajan, Guindulman beside The People-Choice Pharmacy near YK’s enterprises.
                 Our journey began with a simple yet heartfelt dream: to share
                exceptional coffee with our community. In the early days, our humble shop was more than just a place to enjoy a cup of coffee. It became 
                a gathering spot where neighbors caught up over aromatic brews, each day brought new faces and stories, weaving a vibrant tapestry of connections and shared experiences.<br><br>
                We are incredibly grateful for the continuous support from our loyal customers and the community. Your unwavering patronage and enthusiasm have allowed us to grow and 
                thrive, turning our dream into a reality. We look forward to serving you with the same passion and dedication for many more years to come. Thank you for being a part of the Kape Callé family.
            </p>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container2 fade-in">
            <img class="coffeeimage" src="img/pic23.webp" alt="coffegrounds">
            <h2>Our Café</h2>
            <p>
                Our exquisite concotions from coffee to non-coffee to other refreshing drinks are a symphony of flavors that will transport your taste
                buds to a realm of pure bliss. So come, taste and experience the best of Kape Callé, your comfort in a cup. 
            </p>
            <a href="https://www.facebook.com/profile.php?id=100093087016561" target="_blank" rel="noopener noreferrer"><button class="learn-more-btn">Learn More</button></a>
        </div>

    </section>

    <?php include("User_footer.php");?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const faders = document.querySelectorAll('.fade-in');
            const options = {
                threshold: 0.5,
                rootMargin: "0px 0px -50px 0px"
            };

            const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        return;
                    } else {
                        entry.target.classList.add("visible");
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, options);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });
        });
    </script>

</body>
</html>
