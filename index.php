<!DOCTYPE html>
<html lang="en">
   <!-- Set variables to use in this page -->
   <?php 
      $myName        = "Johnson Absolu";
      $courseTitle   = "CSC E269 Server-Side Programming";
      $schoolName    = "Housatonic Community College";
      $currentPage   = $_SERVER['SCRIPT_NAME'];
      $myId          = basename(getcwd());
      $headShot      = "img/john_headshot.png";
      $copyRightLine = "&copy; 2023 - Johnson Absolu, Bridgeport, CT 06604";
      ?>
   <head>
      <title><?php echo $myName; ?> - <?php echo $currentPage; ?> </title>
      <meta charset="utf-8">
      <!-- The next 3 lines are needed for Bootstrap 5 -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- This is YOUR custom css file -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="p-5 bg-primary text-white text-center">
         <div class="row">
            <div class="col-md-2">
               <img class="img-fluid rounded-circle" alt="My headshot" src="<?php echo $headShot; ?>"> 
            </div>
            <div class="col-md-10">
               <h1><?php echo $courseTitle ?></h1>
               <h2><?php echo $schoolName ?></h2>
               <h2><?php echo $myId . ' - ' . $myName; ?></h2>
            </div>
         </div>
      </div>
      <div class="row rowSpacer">
         <div class="col-md-12 text-center">
            <a href="php-learn" class="btn btn-outline-primary" role="button">PHP Learn</a>
            <a href="php-basics" class="btn btn-outline-primary" role="button">PHP Basics</a>
            <a href="php-project" class="btn btn-outline-primary" role="button">PHP Project</a>
            <a href="js-learn" class="btn btn-outline-primary" role="button">JS Learn</a>
            <a href="js-project" class="btn btn-outline-primary" role="button">JS Project</a>
            <a href="https://csc269-00.hcc-computerscience.com/" class="btn btn-outline-primary" role="button">Class Home Page</a>
         </div>
      </div>
      <footer class="footer mt-auto py-3 bg-light">
         <div class="container">
            <span class="text-muted text-center">
               <p><?php echo $copyRightLine ?></p>
            </span>
         </div>
      </footer>
   </body>
</html>