<?php
include '../components/pdo.php';

$id = 1; // example id to delete

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

if ($stmt->rowCount() > 0) {
    echo "User deleted successfully!";
} else {
    echo "Delete failed! No user found with that ID.";
}
?>
