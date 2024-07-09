<?php 
 session_start();
 if(!isset($_SESSION['user_type']) || !($_SESSION['user_type'] != 'admin')){
     header("Location: login.php");
     exit;
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url("img/bg.jpg") no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .content {
            z-index: 1;
            text-align: center;
            color: white;
        }

        button {
            font-size: 15px;
            font-weight: bold;
            padding: 8px 25px;
            border-radius: 10px;
            border: none;
            background-color: #e7a200;
            color: #fff;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e7a200c7;
            color: #ffffffb2;
        }
    </style>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="icon" href="img/orig_logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Judson:ital,wght@0,400;0,700;1,400&family=Kumbh+Sans:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="img/icon.ico">
</head>

<body>
    <div class="overlay"></div>
    <div class="content">
        <h2>Hello, admin</h2>
        <form action="logout.php" method="post">
            <button>Logout</button>
        </form>
    </div>

</body>
</html>
