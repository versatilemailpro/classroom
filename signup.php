<?php

include 'connection.php';

if(isset($_POST['pass'])){
$fullName = $_POST['fullName'];
$emailAddress = $_POST['emailAddress'];
$passWd = $_POST['passWd'];

$Query = "INSERT INTO users(fullName,emailAddress,passWd) VALUES ('$fullName','$emailAddress','$passWd')";

if(mysqli_query($conn,$Query)){
    header("location:dashboard");
}else{
    echo "Retry";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <center><h1>Welcome to Gamerz Choices</h1>
    <h2>Signup</h2><br>
    <form action="signup.php" method="POST">
    
    <label for="name">Full Name</label><br>
    <input type="text" name="fullName" id="fullName" required><br><br>

    <label for="email">Email</label><br>
    <input type="email" name ="emailAddress" id ="emailAddress" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="passWd" id="passWd" required><br><br>

    <label for="password">Confirm Password</label><br>
    <input type="password" name="passWd" id="passWd" required><br><br>

    <input type="submit" name="pass" value= "Submit"><br><br>

    </form>
    
    Already a member of Gamerz Choices ? <a href="login.php">Login</a></center>
    
</body>
</html>