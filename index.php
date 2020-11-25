<!DOCTYPE html>
<html lang="en">
<head>
  <title>OLÁ MUNDO!! :)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Home</h3>
  

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Sites</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Registo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="lista.php">Lista</a>
    </li>
  </ul>
</nav>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image 1.jpg" alt="image 1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Image 1</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image 2.jpg" alt="image 2" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Image 2</h3>
         </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image 3.jpg" alt="image 3" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Image 3</h3>
         </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
  <h2>Formulário de login</h2>
 <br>
  <form class="form-inline" action="/action_page.php">
    <label for="email">Email:</label> &nbsp;
    <input type="email" class="form-control" id="email" placeholder="Insira email" name="email"> &nbsp;
    <label for="pwd">Password:</label> &nbsp;
    <input type="password" class="form-control" id="pwd" placeholder="Insira password" name="pswd"> &nbsp;
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Relembrar-me &nbsp;
      </label>
    </div>
    <button type="submit" class="btn btn-primary" href="login.php">Submit</button>
  </form>
</div>

</body>
</html>

<?php
require_once "config.php";

