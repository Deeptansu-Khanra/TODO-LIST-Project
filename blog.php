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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/blog.css" class="rel">
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
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="welcome.php">To-do</a></li>
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="#">About</a></li>
                <li class="nav-item v-class-resp"><a class="nav-link v-class-resp" href="logout.php">Logout</a></li>
                
            </ul>
        </div>
        <div class="rightNav v-class-resp">
        <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><font color="white"> <?php echo "Welcome, ". $_SESSION['username']?></font>
        <div class="date" style="color: white"></div>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
</nav>
<section class="contact background" id="contact" >
  <div class="container">
    <h3 style="color: white">Top News <span class="badge badge-secondary">by Be-Productive</span></h3>
    <hr>
    
    <div class=" accordion" id="newsAccordion"></div>
  </div>
</section>
  <footer>
        <p class="text-footer" style="margin: 0;">
            Copyright &copy; 2027 www.Be-Productive com - All rights reserved
        </p>
    </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="js/resp.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  <script src="js/news.js"></script>
</body>

</html>
