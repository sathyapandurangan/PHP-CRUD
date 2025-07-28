<?php
$nameError = "";
$passwordError = "";    
if(isset($_POST['submit'])){
    $name = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $password = $_POST['password'];

    if(empty($name)){
        $nameError = "Name is required";
    }
    if(empty($lastName)){
        $lastNameError = "Last Name is required";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<style>
    body{
        font-family: Arial, sans-serif; margin: 20px;
        padding: 30px;
        background-color: violet;

    }
    form {
        max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;
    }
    h2{
        text-align: center; color: black; font-size: 24px; margin-bottom: 20px;
    }
  input{
        disply:center; width: 100%; padding: 10px; box-sizing: border-box; border-radius: 4px; border: 1px solid #ccc; margin-top: 5px;
    }
    button {
        margin-top: 15px; padding: 10px; width: 100%; border-radius: 4px; border: none; color: black; font-size: 16px; cursor: pointer;
    }
    .link-buttons {
        display: flex; justify-content: space-between; margin-top: 10px;
    }
    .link-buttons button {
        color: black; border: none; padding: 10px 15px; cursor: pointer;
    }
    select {
        width: 30%; padding: 10px; box-sizing: border-box; border-radius: 4px; border: 1px solid #ccc; margin-top: 5px;
    }
    select .language{
        width: 30%; padding: 10px; box-sizing: border-box; border-radius: 4px; border: 1px solid #ccc; margin-top: 5px;
    }
 
    
</style>

<body>
<h2>Registration Form</h2>
<form method="post" action="">
    First Name: <input type="text" name="first_name" required>
    <span style="color: red;"> <?php echo $nameError?></span><br><br>
    Last Name: <input type="text" name="last_name" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Email ID: <input type="email" name="email" required><br><br>
    Date of Birth: <input type="date" name="dob" required><br><br>

    Known Languages:
    <select name="languages" required>
        <option value="">Select</option>
        <option value="English">English</option>
        <option value="Tamil">Tamil</option>
        <option value="Hindi">Hindi</option>
        <option value="Malayalam">Malayalam</option>
    </select><br><br>

    Country:
    <select name="country" required>
        <option value="">Select</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
    </select><br><br>

    State:
    <select name="state" required>
        <option value="Select">Select</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telungana">Telungana</option>
        <option value="Anthara pradash">Anthara pradash</option>
        <option value="karnataka">karnataka</option>
    </select><br><br>

    City:
    <select name="city" required>
        <option value="Select">Select</option>
        <option value="Chennai">Chennai</option>
        <option value="kerala">kerala</option>
        <option value="Mumbai">Mumbai</option>
        <option value="punai">punai</option>
    </select><br><br>

    <button type="submit" name="submit">Submit</button>
    <a href="login.php"><button type="button">Go to Login</button></a>
</form>
</body>
</html>