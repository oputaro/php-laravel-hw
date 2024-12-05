<?php
require 'db_connect.php';
include 'navbar.php';

$sql = "SELECT * FROM tasks";
$stmt = $pdo->query($sql);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td><?= htmlspecialchars($task['title']) ?></td>
            <td><?= htmlspecialchars($task['description']) ?></td>
            <td><?= $task['created_at'] ?></td>
            <td>
                <a href="edit_task.php?id=<?= $task['id'] ?>">Edit</a> | 
                <a href="delete_task.php?id=<?= $task['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
