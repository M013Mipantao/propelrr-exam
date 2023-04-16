<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examdb";
$charset = "utf8mb4";

try {
    $dsn = "mysql:host=". $servername .";dbname=". $dbname .";charset=". $charset;
    $conn = new PDO($dsn, $username,$password);
    return $conn;
} catch ( PDOException $err) {
    echo "Database Connection Error " . $err->getMessage();
    exit();
}



?>