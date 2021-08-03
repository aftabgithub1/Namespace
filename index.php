<?php
require_once __DIR__.'/config.php';

use classes\Date;
use lib\Web;


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" condent="Website, Web developer, Web Developer, Web developer and Web Developer">
  <meta name="author" condent="Aftab Ahmed">
  <title>PHP NAMESPACE</title>

  <!-- ======== All Links Starts ======== -->
  <link rel="stylesheet" href="asset/css/bootstrap-4.5.3.min.css">
  <link rel="stylesheet" href="asset/css/fonts.css" >
  <link rel="stylesheet" href="asset/css/fontawesome-5.13.0.min.css">
  <link rel="stylesheet" href="asset/css/custom.css">
  <!-- ======== All Links Ends ======== -->
</head>

<body>
  <!-- ======== Starts Top Navigaeion Bar ======== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="asset\images\aftabwebdev_logo.png" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        <span class="ml-4">PHP Namespace</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown dropdown-left">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="dashboard.html">Dashboard</a>
              <a class="dropdown-item" href="#">Others</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ======== Ends Top Navigaeion Bar ======== -->


  <!-- ======== Starts Banner ======== -->

  <!-- ======== Ends Banner ======== -->


  <!-- ======== Starts Section ======== -->
  <section>
    <div class="container">
      <?php
      $date = new Date;
      echo "<br><br>";
      $web = new Web;
      echo "<br><br>";
      echo "<br><br>";
      echo $date->parseDate('1980-1-12 4:30:00 pm', 'l d M Y h:i:s a');
      echo "<br><br>";
      ?>
      <form action=""method="post">
        <div class="form-row">
          <div class="col-4">
            <input type="datetime-local" name="date" value="" class="form-control">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-secondary">Show date</button>
          </div>
        </div>
      </form>
      
      <p>
      <?PHP  
        if(isset($_POST['date'])) {
          echo $date->parseDate($_POST['date'], 'l d F Y h:i:s A');
        }
      ?>
      </p>
    </div>
  </section>
  <!-- ======== Ends Section ======== -->


  <!-- ======== Starts Footer ======== -->
  <!-- ======== Ends Footer ======== -->


  <!-- ======== Starts Scripts ======== -->
  <script src="asset/js/fontawesome-5.13.0.min.js"></script>
  <script src="asset/js/jquery-3.4.1.min.js"></script>
  <script src="asset/js/popper-2.0.6.js"></script>
  <script src="asset/js/bootstrap-4.5.3.min.js"></script>
  <script src="asset/js/custom.js"></script>
  <!-- ======== Ends Scripts ======== -->
</body>
</html> 