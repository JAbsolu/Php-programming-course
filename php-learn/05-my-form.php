<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="css/05-my-style.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>
      <script src="js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <?php include("inc/05-nav.php"); ?>
      <?php include("inc/05-header.php"); ?>
      <div class="container">
      <form>
      <!-- Last Name input -->
      <div class="form-outline mb-4">
         <label class="form-label" for="lastName">Last Name</label>
         <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" />
      </div>

      <!-- Company Name input -->
      <div class="form-outline mb-4">
         <label class="form-label" for="companyName">Company Name</label>
         <input type="text" id="companyName" name="CompanyName" class="form-control" placeholder="First name" />
      </div>

      <!-- Password input -->
      <div class="mb-3">
         <label class="form-label" for="pwd">Password:</label>
         <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
         <label class="form-label" for="email">Email address</label>
         <input type="email" id="email" name="email" class="form-control" placeholder="Email address"/>
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
         <label class="form-label" for="message">Message</label>
         <textarea class="form-control" id="message" name="message" rows="4"></textarea>
      </div>

      <hr>

      <!-- Radio Button -->
      <div class="mb-4">
         <h3>Favorite programming language</h3>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="favBeatle" value="Paul" id="Paul">
            <label class="form-check-label" for="Paul">JavaScript</label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="radio" name="favBeatle" value="John" id="John">
            <label class="form-check-label" for="John">Python</label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="radio" name="favBeatle" value="George" id="George">
            <label class="form-check-label" for="George">PHP</label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="radio" name="favBeatle" value="Ringo" id="Ringo">
            <label class="form-check-label" for="Ringo">Java</label>
         </div>
      </div>

      <!-- Select Box -->
      <div class="mb-4">
         <label class="form-label" for="FavFruit">Favorite Framework/Library</label>
         <select class="form-select" name="favFruit" id="FavFruit">
            <option>React</option>
            <option>Vue</option>
            <option>jQuerry</option>
            <option>Flask</option>
         </select>
      </div>

      <!-- Toggle Switch -->
      <div class="mb-4">
         <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
            <label class="form-check-label" for="mySwitch">Dark Mode</label>
         </div>
      </div>
      </div>
      
      <?php include("inc/05-footer.php"); ?>
   </body>
</html>

<!--
Here are some links to help you with Bootstrap 5 forms
Google: "Bootstrap 5 form templates"

https://getbootstrap.com/docs/5.0/forms/overview/
https://mdbootstrap.com/docs/standard/forms/overview/ 
https://blog.hubspot.com/website/bootstrap-form-template
https://colorlib.com/wp/bootstrap-form-templates/
-->