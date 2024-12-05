<?php
require 'db_connect.php';
include 'navbar.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$task = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="update_task.php" method="POST">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($task['title']) ?>" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="5" cols="30" required><?= htmlspecialchars($task['description']) ?></textarea><br><br>

        <input type="submit" value="Update Task">
    </form>
</body>
</html>
