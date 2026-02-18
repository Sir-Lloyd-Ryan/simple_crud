<?php
include '../components/pdo.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
</tr>

<?php foreach($users as $user): ?>
<tr>
    <td><?= $user['id'] ?></td>
    <td><?= $user['firstname'] ?></td>
    <td><?= $user['lastname'] ?></td>
</tr>
<?php endforeach; ?>
</table>
