<!DOCTYPE html>
<html lang="en">
   <!-- Set variables to use in this page -->
   <?php 
      $myName        = "Johnson Absolu";
      $courseTitle   = "CSC*E269 Server-Side Programming";
      $schoolName    = "Housatonic Community College";
      $currentPage   = $_SERVER['SCRIPT_NAME'];
      $myId          = basename(getcwd());
      $headShot      = "img/img-avatar.png";
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
      <link href="css/basics-style.css" rel="stylesheet">
   </head>
   <body class="bg-light">
      <div class="p-5 bg-primary text-white text-center">
         <div class="row">
            <div class="col-md-2">
               <img class="img-fluid rounded-circle" alt="My headshot" src="<?php echo $headShot; ?>"> 
            </div>
            <div class="col-md-10">
               <h1><?php echo $courseTitle ?></h1>
               <h2><?php echo $schoolName ?></h2>
               <h2><?php echo $myId . ': ' . $myName; ?></h2>
               <a href=".." class="btn btn-info" role="button">Home</a>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top:20px;">
         <div class="col-md-4"></div>
         <div class="col-md-4">
            <?php
               $dir = '../php-basics/';
               if ($handle = opendir($dir)) {
                 while(false !== ($file = readdir($handle))) 
                   {if ($file != "." && $file != ".." && $file != "index.php")
                   {if (is_dir("$dir/$file")) $folder_array[] = $file;
               else
                 $file_array[] = $file;}}closedir($handle);}
               if ($file_array)
               {sort ($file_array);foreach($file_array as $file)
               {echo "<a href='$file'>$file</a><br/>";}}
               ?>
         </div>
         <div class="col-md-4"></div>
      </div>
      <div class="row" style="margin-top:20px;">
         <div class="mt-5 p-4 bg-primary text-white text-center">
            <p><?php echo $copyRightLine ?></p>
         </div>
      </div>
   </body>
</html>