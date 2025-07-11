<?php
$host = 'localhost';
$user = 'root';
$password = 'Jaswanth@34';
$dbname = 'car_store';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
