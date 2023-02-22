<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/05-my-style.css">
    <title>About me</title>
  </head>
  <body>
    <?php include("inc/05-nav.php"); ?>
    <?php include("inc/05-header.php"); ?>

    <div class="container main-container">
      <div class="row">
        <div class="col-md-4">
          <img src='img/john.jpeg'/>
        </div>
        <div class="col-md-8">
          <h2>Hello My Name is <span class="text-accent">Johnson Absolu</span></h2>
          <p>
              I'm a Computer Information Systems major at Housatonic Community College, 
              this is my last semester as I will graduate on May 2023. After graduating I plan on working 
              full time as a Software or Data Engineer while pursuing my bachelor degree at Southern Connecticut State University
              I am skilled with HTML, CSS, JavaScript, React, MySQL, Python and Linux. My goal this year is 
              to pick up a Backend language, I'm currently learning python on my free time but I also plan on learning Node Js 
              as a backend language.
              I also plan on learning Typescript to improve my JavaScript skills.
          </p>
        </div>
      </div>
    </div>


    <div class="container socialLinks-container">
      <h3>Follow me and checkout my projects on Github and Codepen</h3>
      <div class="row">
        <div class="col-md-4">
         <a href="https://www.linkedin.com/in/johnson-absolu/" target="_blank"><h4>Linkedin</h4></a>
        </div>
        <div class="col-md-4">
          <a href="https://github.com/JAbsolu" target="_blank"><h4>Github</h4></a>
        </div>
        <div class="col-md-4">
          <a href="https://codepen.io/Jabsolu" target="_blank"><h4>Codepen</h4></a>
        </div>
      </div>
    </div>

    <?php include("inc/05-footer.php"); ?>
  </body>
</html>
