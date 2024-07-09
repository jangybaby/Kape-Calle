<?php
    session_start(); 
    include ('php/db_connect.php'); 

    $fullname = $email = $message = '';
    $errors = array('fullname' => '', 'email' => '', 'message' => '');

    if(isset($_POST['submit'])) {

        $fullname = $_POST['fullname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
            $errors['fullname'] = 'no special characters allowed';
        }

        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Must be a valid email';
        }

        $message = $_POST['message'];

        if(array_filter($errors)){

        } else {

            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);

            $sql = "INSERT INTO feedback_table(fullname, email, message) VALUES ('$fullname', '$email', '$message')";

            if(mysqli_query($conn, $sql)){
                header('Location: user_contact.php');
            } else{
                echo 'query error:' . mysqli_error($conn);
            }
            
        }




        // try {
        //     $stmt = $dbh->prepare("INSERT INTO contacttable (fullname, email, message) VALUES (:fullname, :email, :message)");
        //     $stmt->bindParam(':fullname', $fullname);
        //     $stmt->bindParam(':email', $email);
        //     $stmt->bindParam(':message', $message);
        //     $stmt->execute();

        //     header("Location: user_contact.php?success");
        //     exit;
        // } catch (PDOException $e) {
        
        //     echo "Error: " . $e->getMessage();
        // }
        // $dbh = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kape Callé Company</title>   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/test_contact.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">
</head>

<body>

<?php include("user_header.php");?>

<section class="contactus">
    <img src="img/contact_bg.jpg" alt="Coffee Machine">
    <div class="content">
        <h2>CONTACT US</h2>
        <p>If you have general questions or concerns about Kape Callé, please leave a message</p>
    </div>

    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" style="font-size:29px;color: white"></i></div>
                <div class="text">
                    <h3><b>Address</b></h3>
                    <p>Purok 3 Tourism Rd, General Luna, 8419 Surigao del Norte</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-phone" style="font-size:29px;color: white"></i></div>
                <div class="text">
                    <h3><b>Phone</b></h3>
                    <p>09564861554</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-envelope" style="font-size:29px;color: white"></i></div>
                <div class="text">
                    <h3><b>Email</b></h3>
                    <p>kapecallé@gmail.com</p>
                </div>
            </div>

            <!-- facebook -->
            <div class="box">
                <div class="face">
                    <a href="https://www.facebook.com/nearbycoffee.iao" rel="noopener noreferrer" target="_blank">
                        <ion-icon name="logo-facebook" style="color:white; font-size:55px;"></ion-icon>
                    </a>
                </div>
                <div class="text">
                    <h3><b>Facebook</b></h3>
                    <a href="https://www.facebook.com/nearbycoffee.iao" rel="noopener noreferrer" target="_blank" style="text-decoration: none; color:white;">
                        <p id="facebook">Kape Callé Guindulman</p>
                    </a>
                </div>
            </div>

            <!-- instagram -->
            <div class="box">
                <a href="https://www.instagram.com/nearbycoffee.iao/" rel="noopener noreferrer" target="_blank">

                </a>
                <div class="insta"> 
                    <a href="https://www.instagram.com/nearbycoffee.iao/" rel="noopener noreferrer" target="_blank">
                    <ion-icon name="logo-instagram"  style="font-size:55px;color: white"></ion-icon>
                    </a>
                </div>
                <div class="text">
                    <h3><b>Instagram</b></h3>
                    <a href="https://www.instagram.com/nearbycoffee.iao/" rel="noopener noreferrer" target="_blank" style="text-decoration: none; color:white;">
                        <p id="insta">Kape Callé Guindulman</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="contactForm">
                <form method="POST" action="user_contact.php">
                    <h2>Send message</h2>
                    <div class="inputBox">
                        <input type="text" name="fullname" value = "<?php echo $fullname ?>" required="required" >                        
                        <span>Full Name</span>
                        <div class="red-text"><?php echo $errors['fullname'];  ?></div>                        
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required" value = "<?php echo $email ?>">                        
                        <span>Email</span>
                        <div class="red-text"><?php echo $errors['email'];  ?></div>
                    </div>
                    <div class="inputBox">
                        <input type="textarea" name="message" required="required" value = "<?php echo $message ?>">
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("user_footer.php");?>
</body>

</html>