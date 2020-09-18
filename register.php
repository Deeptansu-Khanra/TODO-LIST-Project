<?php
require_once "config.php";
$username=$password=$confirm_password=$email="";
$username_err=$password_err=$confirm_password_err=$email_err="";
if($_SERVER['REQUEST_METHOD']=="POST"){

if(empty(trim($_POST["username"]))){
    $username_err ="Username cannot be blank";
}else{
    $sql=  "SELECT id FROM users WHERE username = ?";
    $stmt= mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = trim($_POST['username']); 

        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)==1)
        {
            $username_err = "This username already exists";
        }
        else{
            $username = trim($_POST['username']);
        }
    }
    else{
        echo "Something went wrong";
    }
    mysqli_stmt_close($stmt);
}
}




if(empty(trim($_POST["password"]))) {
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST["password"]))< 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password= trim($_POST["password"]);
}

if(trim($_POST["password"]) != trim($_POST["confirm_password"]) ){
    $confirm_password_err = "Passwords did not match";
}

if(empty(trim($_POST["email"]))) {
    $email_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST["email"]))< 5){
    $email_err = "Password cannot be less than 5 characters";
}
else{
    $email= trim($_POST["email"]);
}



 if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
     $sql = " INSERT INTO users (username, password, email) VALUES (?,?,?) ";
     $stmt = mysqli_prepare($conn, $sql);
     if($stmt ){
         mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
         $param_username = $username;
         $param_password = password_hash($password, PASSWORD_DEFAULT);
         $param_email = $email;
         if(mysqli_stmt_execute($stmt)){
              header("location: login.php");
         }
         else{
             echo "Something went wrong... cannot redirect";
         }
         mysqli_stmt_close($stmt);

     }
     
 }
 mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up with us</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <link rel="stylesheet" href="css/responsive.css" class="rel"> 

</head>
<body>

    <div class="main background ">

        <!-- Sign up form -->
        
            <div class="container ">
                <div class="signup-content ">
                    <div class="signup-form ">
                        <h2 class="form-title">Sign up</h2>
                        
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                        <a href="index.html" class="signup-image-link">Home</a>
                    </div>
                </div>
            </div>
        

        

    </div>
    <footer>
        <b class="text-footer">
            Copyright &copy; 2027 www.Be-Productive com - All rights reserved
</b>
    </footer>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>