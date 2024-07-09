<?php
    include("php/register_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="img/icon.ico">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body background="img/bg.jpg">
    <div class="overlay"></div>
    <div class="container d-flex justify-content-center align-items-center"style="min-height: 90vh;">
        <form class="border shadow p-3 rounded bg-white" style="width: 450px;" method="post" novalidate>
            <h2 class="text-center p-3">REGISTER</h2>
           

            <!-- display errors -->
            <?php if(isset($errors) && !empty($errors)): ?>
                <?php foreach($errors as $error): ?>
                    <div class='alert alert-danger'><?php echo $error; ?></div>
                <?php endforeach; ?>
                <?php elseif(isset($_POST["register"])): ?>
                    <div class='alert alert-success'>You are registered successfully.</div>
            <?php endif; ?>
           
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" name="email"  placeholder="Enter your email">
            </div>

            <div class="mb-3 input_container" >
                <input type="password" class="form-control" name="password" placeholder="Enter your password" id="password">
                <img src="img/eye-off-svgrepo-com.svg" id="eyeicon">
            </div>

            <div class="mb-3 input_container" >
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm password" id="cpassword">
                <img src="img/eye-off-svgrepo-com.svg" id="ceyeicon">
            </div>
            
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit" name="register" class="btn container d-flex justify-content-center" style="width:100px;background-color: #e7a200c7; color:white;">Register</button>
            <p style="margin-top: 1rem; margin-left:5rem;">Already have an account? <a href="login.php">Login Here</a></p>
        </form>
    </div>

    <!-- javascript for the show and hide of the password -->
    <script>

        let eyeicon = document.getElementById("eyeicon");
        let password = document.getElementById("password");
        let ceyeicon = document.getElementById("ceyeicon");
        let cpassword = document.getElementById("cpassword");

        eyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                eyeicon.src = "img/eye-svgrepo-com.svg";
            }else{
                password.type = "password";
                eyeicon.src = "img/eye-off-svgrepo-com.svg";
                
            }
        }

        ceyeicon.onclick = function(){
            if(cpassword.type == "password"){
                cpassword.type = "text";
                ceyeicon.src = "img/eye-svgrepo-com.svg";
            }else{
                cpassword.type = "password";
                ceyeicon.src = "img/eye-off-svgrepo-com.svg";
            }
        }
    </script>
</body>
</html>