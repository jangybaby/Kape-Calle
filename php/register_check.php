<?php
session_start();
require_once "php/db_connect.php"; // Include database connection

// Function to validate user inputs
function validateInput($input) {
    return trim(htmlspecialchars($input));
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate password
function validatePassword($password) {
    return strlen($password) >= 8 && preg_match("/[a-z]/i", $password) && preg_match("/[0-9]/i", $password);
}

// Function to check if email already exists in the database
function emailExists($conn, $email) {
    $sql = "SELECT * FROM users_form WHERE email =?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_num_rows($result) > 0;
    } else {
        return false; 
    }
}

// Function to register user
function registerUser($conn, $name, $email, $password, $role) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users_form(name, email, passwordHash, role) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $passwordHash, $role);
        mysqli_stmt_execute($stmt);
        return true;
    } else {
        return false; 
    }
}

if (isset($_POST["register"])) {
    $registrationErrors = array();
    $name = validateInput($_POST["name"]);
    $email = validateInput($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role = validateInput($_POST["role"]);

    // Validate inputs
    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        $registrationErrors[] = "All fields are required!";
    } else {
        if (!validateEmail($email)) {
            $registrationErrors[] = "Email is not valid!";
        }

        if (!validatePassword($password)) {
            $registrationErrors[] = "Password must be at least 8 characters long and contain a letter and a number!";
        }

        if ($password!== $cpassword) {
            $registrationErrors[] = "Passwords do not match!";
        }

        if (emailExists($conn, $email)) {
            $registrationErrors[] = "Email already exists!";
        }
    }

    if (empty($registrationErrors)) {
        if (registerUser($conn, $name, $email, $password, $role)) {
            $_SESSION['user_type'] = $role;
            if ($role == "user") {
                header("Location: user_home.php");
                exit;
            } elseif ($role == "admin") {
                header("Location: admin_home.php");
                exit;
            } else {
                die("Something went wrong!"); 
            }
        } else {
            die("Something went wrong!"); 
        }
    }
}
?>