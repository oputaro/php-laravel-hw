<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
</head>
<body>
    <h1>Add a New Task</h1>
    <form action="submit_task.php" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Add Task">
    </form>
</body>
</html>
