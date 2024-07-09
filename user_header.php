<?php
if(isset($_SESSION['user_type'])) {
    echo '<header>
               <a href="user_home.php"><img id="logo" src="img/logoo.png" alt="Coffee Business Logo"></a>
              <a class="about" href="user_aboutus.php">ABOUT</a>
              <a class="gallery" href="user_menu.php">MENU</a>
              <a class="contact" href="user_contact.php">CONTACT</a>
              <a class="location" href="user_location.php"><ion-icon name="location-sharp" style="font-size: 20px; margin: -3px 5px;" ></ion-icon> LOCATION</a>
              <form action="logout.php" method="post">
                  <button class="logout">LOGOUT</button>
              </form>
          </header>';
} else {
    echo '<header>
            <a href="user_home.php"><img id="logo" src="img/logoo.png" alt="Coffee Business Logo"></a>
              <a class="about" href="user_aboutus.php">ABOUT</a>
              <a class="gallery" href="user_menu.php">MENU</a>
              <a class="contact" href="user_contact.php">CONTACT</a>
              <a class="location" href="user_location.php"><ion-icon name="location-sharp" style="font-size: 20px; margin: -3px 5px;" ></ion-icon> LOCATION</a>
              <form action="login.php" method="post">
                  <button class="logout">LOGIN</button>
              </form>
          </header>';
}
?>
