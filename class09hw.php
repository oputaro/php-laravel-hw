<?php

//define variable name for rquired data
$nameErr =  $emailErr = $passwordErr = "";

//define variable for collecting data
$name = $email = $password = "";

//validation if user click or not
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //check the name filed
    if(empty($_POST['name'])){
        $nameErr = "Name is required"; 
    }else{
        $name = test_user($_POST['name']);

    }
    //email validation
    if(empty($_POST['email'])){
        $emailErr = "email is required"; 
    }else{
        $email = test_user($_POST['email']);

    }
    //password validation
    if(empty($_POST['password'])){
      $passwordErr = "password is required"; 
   }else{
      $password = test_user($_POST['password']);

  }
  
}

//cleaning data
function test_user($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .err{
            color : red;
        }
    </style>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="submit"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
  </style>

  <div class="form-container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method= "POST">
        <label for="">Name:</label>
        <input type="text" name="name">
        <span class="err"><?php echo $nameErr ?></span>
   
        <label for="">Email:</label>
        <input type="email" name="email">
        <span class="err"> <?php echo $emailErr?></span>
 
        <label for="">Password :</label>
        <input type="password" name="password">
        <span class="err"> <?php echo $passwordErr?></span>

        <input type="submit" value="submit">
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      echo "<p>Your name is : $name</p>
            <p>Your Email is : $email</p>
            <p>Your password is : $password</p>";
    }
    ?>
    </div>

</body>
</html>
