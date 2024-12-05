<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            padding: 15px;
            margin-top: -8px;
            margin-left: -20px;
            margin-right: -14px;
        }
        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
      .cent{
        margin: 0 auto;
      }
        
    </style>
</head>
<body>

<div class="navbar">
  <div class="cent">
    <a href="add_task.php">Home</a>
    <a href="list_tasks.php">View Post</a>
  </div>
</div>

</body>
</html>

