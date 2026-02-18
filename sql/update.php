<?php
include '../components/pdo.php';

$id = 1; // example id
$firstname = "John";
$lastname = "Doe";

$sql = "UPDATE users SET firstname = ?, lastname = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstname, $lastname, $id]);

if ($stmt->rowCount() > 0) {
    echo "User updated successfully!";
} else {
    echo "Update failed! No user found with that ID.";
}
?>
