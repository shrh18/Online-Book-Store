<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>


    <nav class="navbar bg-info navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Book Shop</a>
        </div>

        <!--/.navbar-collapse -->
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
      <li><a href="books.php"><i class="glyphicon glyphicon-book"></i>Books</a></li>
      <li><a href="cart.php"><i class="glyphicon glyphicon-shopping-cart"></i>My Cart</a></li>
      <li><a href="admin.php"><i class="glyphicon glyphicon-user"></i>Admin Login</a></li>
    <ul>

        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" >
      <div class="container">
        <center><h1>Welcome to Book Shop</h1></center>
        <center><p class="lead">There is no friend as loyal as a book</p></center>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">