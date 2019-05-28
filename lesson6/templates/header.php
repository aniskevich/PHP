<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Catalog<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reviews.php">Reviews</a>
      </li>
    </ul>
    <?php session_start(); ?>
    <?php if (!$_SESSION['auth']) :?>
    <form method="POST">
        <button type="submit" class="btn btn-danger mr-1" formaction="register.php">REGISTER</button>
        <button type="submit" class="btn btn-success" formaction="login.php">LOG IN</button>
    </form>
    <?php else :?>
    <form method="POST">
        <button type="button" class="btn btn-primary cartModal">CART</button>
        <button type="submit" class="btn btn-danger mr-1" formaction="cabinet.php">CABINET</button>
        <button type="submit" class="btn btn-success" formaction="public/logout.php">LOG OUT</button>
    </form>
    <?php endif ?>
  </div>
</nav>
<?php 
  require_once DIR."public/cart-layout.php";
  require_once DIR."templates/cart-layout.php";
?>
