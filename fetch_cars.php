<?php
include 'db.php';

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

$cars = array();
while ($row = $result->fetch_assoc()) {
    $cars[] = $row;
}

echo json_encode($cars);
?>
