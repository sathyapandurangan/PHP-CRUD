

<!DOCTYPE html>
<html>
<head>
    <title>Set New Password</title>
    <style>
        body { background:orange;padding: 20px; font-family: Arial; margin: 50px; }
        .error { color: red; }
        form{
           border-radius: 8px; max-width: 450px; margin: auto; padding: 20px; border: 1px solid #ccc; background-color: pink;
        }
        h2{
            text-align: center; color: darkblue;
        }
        input{
            width: 100%; padding: 10px; box-sizing: border-box; border-radius: 8px; border: 1px solid #ccc; margin-top: 5px;
        }
        button {
            margin-top: 15px; padding: 10px; width: 50%; border-radius: 8px; border: none; color: white; background-color: blue; font-size: 16px; cursor: pointer;
        }
    </style>
    
</head>
<body>

<h2>Set Your New Password</h2>

<form name="passwordForm" method="POST" action="process_password.php" onsubmit="return validateForm();">
    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

    <label for="password">New Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" name="confirm_password" required><br><br>

    <button type="submit">Submit</button>
    <button type="submit">Resend Email</button>
</form>



</body>
</html>