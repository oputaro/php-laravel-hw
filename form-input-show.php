<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #4CAF50;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Information</h2>
    <p><span class="label">Your name is:</span> <span class="value"><?php echo $_POST["name"]; ?></span></p>

    

    <p><span class="label">Your email is:</span> <span class="value"><?php echo $_POST["email"]; ?></span></p>
    <p><span class="label">Your password is:</span> <span class="value"><?php echo $_POST["password"]; ?></span></p>
</div>

</body>
</html>
