<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In to your account</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <link rel="stylesheet" href="css/responsive.css" class="rel">
    
</head>
<body>

<div class="main background">


    <div class="container ">
        <div class="signin-content ">
        <div class="signin-image">
        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
        <a href="register.php" class="signup-image-link">Create an account</a>
        <a href="index.html" class="signup-image-link">Home</a>
    </div>
            <div class="signin-form ">
            <h2 class="form-title">Sign In</h2>
        <form method="POST" class="register-form" id="login-form">
            <div class="form-group">
                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="username" id="your_name" placeholder="Your Name"/>
            </div>
            <div class="form-group">
                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="password" id="your_pass" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
            </div>
            <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
            </div>

        </div>
    </div>
</div>
</div>
    <footer>
        <p class="text-footer">
            Copyright &copy; 2027 www.Be-Productive com - All rights reserved
        </p>
    </footer>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
