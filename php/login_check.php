<?php
    session_start();
    require_once "php/db_connect.php"; // Include database connection

    // Function to sanitize user inputs
    function sanitize($input) {
        return htmlspecialchars(mysqli_real_escape_string($GLOBALS['conn'], $input));
    }

    if(isset($_POST["login"])){
        $errors = array();
        // Sanitize user inputs
        $email = sanitize($_POST['email']);
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Validate inputs
        if(empty($email) || empty($password)){
            $errors[] = "All fields are required!";
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Email is not valid!";
            }
        }

        if(empty($errors)) {
            // Prepare and execute SQL query using prepared statements
            $stmt = $conn->prepare("SELECT * FROM users_form WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                if(password_verify($password, $user['passwordHash'])){
                    if ($user['role'] == $role) {
                        $_SESSION['user_type'] = $role;
        
                        if ($role == "user") {
                            header("Location:user_home.php");
                        } elseif ($role == "admin") {
                            header("Location:admin_home.php");
                        }
                        exit();
                    } else {
                        $errors[] = "Incorrect role selected!";
                    }
                }else{
                    $errors[] = "Incorrect email or password!";
                }
            } else {
                $errors[] = "Account doesn't exist!";
            }
        }
    }
?>