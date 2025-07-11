<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM cars WHERE id = $id";
$result = $conn->query($sql);
$car = $result->fetch_assoc();

echo json_encode($car);
?>
