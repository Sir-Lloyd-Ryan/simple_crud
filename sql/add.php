<?php
include '../components/pdo.php';

$firstname = "Vishnu";
$lastname = "Kumar";

$sql = "INSERT INTO users (firstname, lastname) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstname, $lastname]);

echo "New user added successfully!";
?>
