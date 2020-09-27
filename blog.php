<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/welcome.css" class="rel">
    <title>Be-Productive</title>
</head>

<body>
<nav class="navbar navbar-expand-lg background h-nav-resp">
        <a class="navbar-brand" href="#">TODOs List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav v-class-resp">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="welcome.php">To-Do</a></li>
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="#">About</a></li>
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="logout.php">Logout</a></li>
                
            </ul>
        </div>
        <div class="rightNav v-class-resp">
        <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><font color="white"> <?php echo "Welcome, ". $_SESSION['username']?></font>
        <div class="date"></div>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
</nav>

    
<footer>
        <p class="text-footer" style="margin: 0;">
            Copyright &copy; 2027 www.Be-Productive com - All rights reserved
        </p>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        
        <script src="js/resp.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>