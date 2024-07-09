<?php
$dsn = "mysql:host=localhost;dbname=contactdb";
$username = "root";
$password = "";

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>