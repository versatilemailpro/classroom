<?php

include 'connection.php';

if(isset($_POST['pass'])){
    $emailAddress = $_POST['emailAddress'];
    $passWd = $_POST['passWd'];

    $Query = "SELECT * FROM users WHERE emailAddress = '$emailAddress' AND passWd = '$passWd'";
    
    $result = mysqli_query($conn,$Query);

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['emailAddress']===$emailAddress && $row['passWd']===$passWd){
            header("location:dashboard");
        }else{
            echo "Incorrect email or password.";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <center><h1>Welcome to Gamerz Choices</h1>
    <h2>Login</h2><br>
    <form action="login.php" method="POST">
    
    <label for="email">Email</label><br>
    <input type="email" name ="emailAddress" id ="emailAddress" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="passWd" id="passWd" required><br><br>

    <input type="submit" name="pass" value= "Submit"><br><br>

    </form>
    
    Not a member of Gamerz Choices ? <a href="signup.php">Login</a></center>
    
</body>
</html>