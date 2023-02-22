<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/05-my-style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>My Hobbies</title>
  </head>
  <body>
    <?php include("inc/05-nav.php"); ?>
    <?php include("inc/05-header.php"); ?>
    

    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Basketball
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="hobbies-p">I enjoy playing basketball on my free time. I normally play half court with a few of my friends, I find it
                a great way to stay active.
                <br />
                <span><img src="img/Basketball.jpeg" alt="Basketball" width="800px" class="hobbies-desc-img"/></span>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Video Games
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="hobbies-p">Once, in a while when I'm free, I love playing video games on my Xbox Once
                  I enjoy playing sports and racing game. My favorite racing game of all time is 
                  NFS Pro Street, if you're a fan of Racing Games, you should try this classic.
                  As for team sports games, I often play NBA 2k or FIFA, I've owned almost every NBA 2K Games.
                  <br />
                  <span>
                      <img src="img/NFS-ProStreet.jpeg" alt="NFS Pro Street Games Poster" width="800px" class="hobbies-desc-img"/>
                  </span>
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Outdoor Activities
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="hobbies-p">I enjoy a lot of outdoor activities, I often like to hike in the summer or explore some of the trails in Connecticut.
                  I also enjoy going fishing with some of the guys I grew up with, It's a great way to relax and catch some fresh air.
                  <br />
                  <span class="text-red"><b>Don't be this Guy</b></span>
                  <br/>
                  <span><img src="img/fishing-gif.gif" alt="Fishing Gif" class="hobbies-desc-img"/></span>
              </div>
          </div>
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
