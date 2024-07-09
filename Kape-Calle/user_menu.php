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
    <link rel="stylesheet" href="css/user_menu.css">
    <link rel="stylesheet" href="css/ordermenu.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</head>

<body>

    <?php include("user_header.php");?>
  
    <!-- slider -->
    <section class="slider-menu">
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="img/tea2.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Iced Coffee</h2>
                    <p>
                    Welcome from our coffee haven! We specialize in creating the ideal iced coffee that suits your palate, so every sip is a delightful journey into a refreshing, caffeine-filled heaven.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/americano.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Non-Coffee</h2>
                    <p>
                        Experience the serenity of a tea haven, where the art of matcha unfolds with every sip. Enjoy a peaceful escape into vibrant flavors and lasting energy, meticulously crafted just for you.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/hotcofee.png">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Hot Coffee</h2>
                    <p>
                        Come inside our welcoming coffee oasis, where the aroma of freshly brewed coffee fills the air, luring you in to enjoy the robust flavor and cozy warmth of your custom cup of perfection.
                </div>
            </div>
            <div class="item">
                <img src="img/frappe.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Frappe</h2>
                    <p>Step into our frappe paradise, where every refreshing sip is a perfect blend of creaminess and flavor, meticulously crafted to delight your senses and transport you to a realm of exquisite indulgence and blissful satisfaction.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/burger5.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Sandwiches</h2>
                    <p>                 
                        Discover our sandwich haven, where every mouthwatering bite is a harmonious fusion of fresh ingredients and textures, meticulously crafted to tantalize your taste buds and transport you to a world of delectable indulgence and culinary joy.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="img/burger3.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Panfle</h2>
                    <p>
                        Step into our pan-fried delight, where every crispy bite is a tantalizing blend of savory flavors and golden textures, meticulously crafted to satisfy your palate and transport you to a world of culinary delight and delicious indulgence.
                    </p>
                </div>
            </div>
            
            <div class="item">
                <img src="img/snack.jpg">
                <div class="content">
                    <p>Kape Callé</p>
                    <h2>Snacks</h2>
                    <p>
                       Explore our snack haven, where each bite is a delightful combination of flavors and textures, crafted to satisfy your cravings and bring joy to your taste buds.
                    </p>
                </div>
            </div>
        </div>
 
        <!-- button arrows -->
        <div class="arrows">
            <div class="cart-icon">
                <a href="#"><ion-icon name="cart-outline"></ion-icon></a>
            </div>
            <button id="prev"><</button>
            <button id="next">></button>
        </div>


        <!-- thumbnail -->
        <div class="thumbnail">
                <div class="item active">
                    <img src="img/img1.png">
                    <div class="content">
                        Iced Coffee
                    </div>
                </div>
                <div class="item">
                    <img src="img/img2.png">
                    <div class="content">
                        Non-Coffee
                    </div>
                </div>
                <div class="item">
                    <img src="img/img3.png">
                    <div class="content">
                        Hot Coffee
                    </div>
                </div>

                <div class="item">
                    <img src="img/img4.png">
                    <div class="content">
                        Frappe
                    </div>
                </div>

                <div class="item">
                    <img src="img/img5.jpg">
                    <div class="content">
                        Sandwiches
                    </div>
                </div>

                <div class="item">
                    <img src="img/img6.png">
                    <div class="content">
                        Panfle
                    </div>
                </div>

                <div class="item">
                    <img src="img/img7.png">
                    <div class="content">
                        Snacks
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- menu order section -->
    <div class="men">
        <h1 style="text-align: center; margin-right: 30px;">OUR MENU</h1>
        <section class="menu" id="menu">
            <div class="box-container">
                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>  
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Non-Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Hot Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="box-container">
                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Frappee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Iced Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Expresso</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="box-container">
                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Iced Coffee</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/pic8.jpg" alt="">
                    <div class="content">
                        <h3>Expresso</h3>
                        <div class="price">₱60<span>₱100</span></div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btns = document.querySelectorAll('.btn');
            const cartIcon = document.querySelector('.cart-icon');

            // Attach a click event listener to each 'btn' element
            btns.forEach(function(btn) {
                btn.addEventListener('click', function (event) {
                    <?php if (!isset($_SESSION['user_type'])): ?>
                        event.preventDefault();
                        alert('Please login to add items to your cart.');
                    <?php endif; ?>
                });
            });

            // Attach a click event listener to the cart icon
            cartIcon.addEventListener('click', function (event) {
                <?php if (!isset($_SESSION['user_type'])): ?>
                    event.preventDefault();
                    alert('Please login to add items to your cart.');
                <?php endif; ?>
            });
        });
    </script>

    <script src="js/user_menu.js"></script>
    <script src="js/script.js"></script>
  <?php include("user_footer.php");?>
</body>