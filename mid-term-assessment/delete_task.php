<?php
require 'db_connect.php';
include 'navbar.php';

$id = $_GET['id'];
$sql = "DELETE FROM tasks WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: list_tasks.php');
?>
