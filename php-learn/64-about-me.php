
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>00-template-bootstrap5.html</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <link href="css/64-my-style.css" rel="stylesheet">
      <style>
         .fakeimg {height: 200px;background: #aaa;}
      </style>
   </head>
   <body>
      <main class="container-fluid">

      <?php include("inc/64-nav.php"); ?>
      <?php include("inc/64-header.php"); ?>

        ABOUT ME

      <main class="container mt-5">
         <div class="row">

            <div class="col-md-4">
               <h2>About Me</h2>
               <h5>Photo of me:</h5>
               <div><img class="img-fluid" src="img/paul-gruhn.jpg" alt="Paul Gruhn" title="Paul Gruhn"></div>
               <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
               <h3 class="mt-4">Some Links</h3>
               <p>Lorem ipsum dolor sit ame.</p>
               <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                     <a class="nav-link active" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
               </ul>
               <hr class="d-md-none">
            </div><!-- End column -->

            <div class="col-md-8">
               <h2>TITLE HEADING</h2>
               <h5>Title description, Dec 7, 2020</h5>
               <div class="fakeimg">Fake Image</div>
               <p>Some text..</p>
               <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
               <h2 class="mt-5">Mountains Title</h2>
               <h5>Title description, Sep 2, 2020</h5>
               <div>
                  <img class="img-fluid" src="img/pexels-sagui-andrea-618833.jpg" alt="Mountains" title="Mountains">
               </div>
               <p>Some text..</p>
               <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div> <!-- End column -->
         </div>
         <!-- End row -->
      </main>

      <?php include("inc/64-footer.php"); ?>
   </body>
</html>