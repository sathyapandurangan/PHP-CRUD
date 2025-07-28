<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {font-family: Arial; margin: 40px;background-image: url("pexels-thatguycraig000-1563356.jpg"); background-size:cover }
        label{
            display: red; margin-top: 10px; color: black; font-size: 18px;
        }
        button {
            margin-top: 15px; padding: 10px; width: 30%; border-radius: 4px; border: none; color: black; font-size: 16px; cursor: pointer; background:#57C785; 
        }
        
        form { max-width: 450px; margin: auto; padding: 20px; border: 1px; background-color: transparent; border-radius: 8px; }
        input, button { width: 100%; padding: 5px; margin-top: 10px;background-color: rgba(255, 255, 255, 0.74); border-radius: 8px; border: 1px solid #ccc; }
        .link-buttons { display: flex; justify-content: space-between; margin-top: 10px; }
    </style>
    <script>
        function validateForm() {
            var email = document.forms["forgotForm"]["email"].value;
            var otp = document.forms["forgotForm"]["otp"].value;
            var pass = document.forms["forgotForm"]["new_password"].value;
            var confirm = document.forms["forgotForm"]["confirm_password"].value;

            if (email === "") {
                alert("Please enter your email.");
                return false;
            }
            if (otp === "") {
                alert("Please enter the OTP.");
                return false;
            }
            if (pass !== confirm) {
                alert("Passwords do not match.");
                return false;
            }
            if (!/^(?=.*[A-Z])(?=.*\d).{8,}$/.test(pass)) {
                alert("Password must be at least 8 characters, include one uppercase letter and one number.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<h2 style="text-align:center;">Forgot Password</h2>

<form name="forgotForm" method="POST" action="process_forgot_password.php" onsubmit="return validateForm();">
    <label>Email ID:</label>
    <input type="email" name="email" required>

    <label>Enter OTP:</label>
    <input type="text" name="otp" maxlength="6" required>

    <label>New Password:</label>
    <input type="password" name="new_password" required>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password" required>

    <button type="submit">Submit</button>
    <input type="hidden" name="email" value="">
    <button type="submit">Resend Code</button>
</form>

<div class="link-buttons" style="max-width: 450px; margin: auto; text-align: center; margin-top: 20px;">
    <a href="login.php"><button type="button">Goto Login</button></a>
</div>

</body>
</html>