<?php
$host = 'localhost';
$dbname = 'task_management';
$user = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
