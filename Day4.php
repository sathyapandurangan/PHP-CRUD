<?php
$nameError="";
$passwordError="";
if(isset($_POST['submit'])){
    $name=$_POST['username_email'];
    $password=$_POST['password'];

    if(empty($name)){
        $nameError="Please enter your username or email";
    }
    if(empty($password)){
        $passwordError="Please enter your password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; background: #862a9b;
background: linear-gradient(90deg,rgba(134, 42, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%); }
        form { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
       h2{
          text-align: center; color:black ; font-size: 24px; margin-bottom: 20px;
       }
        label { display: block; margin-top: 10px; }
        input[type=text], input[type=password] {
            width: 100%; padding: 8px; box-sizing: border-box; border-radius: 8px; border: 1px solid #ccc; margin-top: 5px;
        }
        button { margin-top: 15px; padding: 10px; width: 100%; border-radius: 4px; border: none; font-size: 16px; cursor: pointer;background-color:rgba(237, 221, 83, 1) 100%);  color: black; }
        .link-buttons { display: flex; justify-content: space-between; margin-top: 10px;background color:rgba(134, 42, 155, 1); }
    .link-buttons button {
         color: black; border: none; padding: 10px 15px; cursor: pointer;
        }
        .error{
            color: red; font-size: 16px; margin-top: 5px;
        }
       
    </style>
    
</head>
<body>

<h2 style="text-align:center;">Login</h2>

<form name="loginForm" method="POST" action="" >
    <label for="username_email">Email or Username:</label>
    <input type="text" name="username_email" id="username_email" required>
        <span style="color: red;"><?php echo $nameError ?></span>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
         
    <button type="submit" name="submit">Login</button>

    <div class="link-buttons">
        <a href="register.php"><button type="button">Register</button></a>
        <a href="forgot_password.php"><button type="button">Forgot Password</button></a>
    </div>
</form>

</body>
</html>