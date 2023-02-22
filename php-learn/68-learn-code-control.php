<!DOCTYPE html>
<html lang="en">
   <head>
      <title>68-learn-code-control.php</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <style>
      </style>
   </head>
   <body>
      <header class="p-5 bg-success text-white text-center">
         <h1>68-learn-code-control.php</h1>
         <h3><small class="text-light">Murach Chapter 8</small></h3>
      </header>
      <main class="container-fluid">
         <div class="row mt-4">
            <!-- ALL NORMAL HTML GOES ABOVE THIS LINE -->
            <?php
               if (isset($_POST['submit'])) {       // 'Submit' button is pressed
               // --------------------------------- Assigns values from the form to this PHP script
               echo "<h2>Chapter 8 Results</h2>"; 





               } else {                                  
               ?>
            <h1>Data Entery for Chapter 8</h1>
              <form method="post" action="">
            



              
               <hr>
               <!-- Submit button -->
               <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
               <!-- Reset button -->
               <button type="reset" class="btn btn-info btn-block mb-4">Reset</button>
            </form>
            <!-- End form -->
            <?php } ?>
            <!-- NORMAL HTML CAN GO BELOW THIS LINE -->
         </div>
         <!-- End row -->
      </main>
      <navfooter>
         <a href="">Back to form</a> | <a href="index.php">Home</a>
      </navfooter>
   </body>
</html>