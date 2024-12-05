<?php
require 'db_connect.php';
include 'navbar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->execute();

    echo "<h2>Task Added Successfully!</h2>";
    echo "<a href='add_task.php'>Add Another Task</a> | <a href='list_tasks.php'>View All Tasks</a>";
}
?>
