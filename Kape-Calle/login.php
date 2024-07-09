<?php
    include("php/login_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body background="img/login_bg.jpg">
    <div class="overlay"></div>
    <div class="container d-flex justify-content-center align-items-center"style="min-height: 90vh;">
        <form class="border shadow p-3 rounded bg-white" style="width: 450px;" method="post">
            <h2 class="text-center p-3">LOGIN</h2>

            <!-- display errors -->
            <?php if(isset($errors) && !empty($errors)): ?>
                <?php foreach($errors as $error): ?>
                    <div class='alert alert-danger'><?php echo $error; ?></div>
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>
            <div class="mb-3 input_container">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                <img src="img/eye-off-svgrepo-com.svg" id="leyeicon">
            </div>
            <div class="mb-1">
                <label class="form-label">Select Role</label>
            </div>
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit" name="login" class="btn container d-flex justify-content-center" style="width:100px;background-color: #e7a200c7; color:white;">Login</button>
            <p style="margin-top: 1rem; margin-left:5rem;">Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>

    <!-- javascript for the show and hide of the password -->
    <script>
        let leyeicon = document.getElementById("leyeicon");
        let password = document.getElementById("password");

        leyeicon.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
                leyeicon.src = "img/eye-svgrepo-com.svg";
            }else{
                password.type = "password";
                leyeicon.src = "img/eye-off-svgrepo-com.svg";
                
            }
        }
    </script>
</body>
</html>