<?php
$db_host = $_ENV['DB_HOST'] ?? 'localhost';
$db_database = $_ENV['DB_DATABASE'] ?? 'precomm';
$db_username = $_ENV['DB_USERNAME'] ?? 'root';
$db_password = $_ENV['DB_PASSWORD'] ?? '';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>